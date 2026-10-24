{{-- Destination: resources/views/admin/package-enquiries/index.blade.php --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <style>
        /* Mobile OTP verification badge */
        .mv-pill {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            margin-left: 6px;
            padding: 1px 8px;
            border-radius: 20px;
            border: 1px solid transparent;
            font-size: 11px;
            font-weight: 700;
            line-height: 1.6;
            white-space: nowrap;
            vertical-align: middle;
        }

        .mv-pill i {
            font-size: 10px;
        }

        .mv-pill.yes {
            background: #e3f1ec;
            color: #007a5e;
            border-color: #9fcfc3;
        }

        .mv-pill.no {
            background: #fff5cc;
            color: #916a00;
            border-color: #e8d080;
        }
    </style>

    <div class="app-content content container-fluid">
        <div class="list-page">

            <!-- Page header -->
            <div class="list-page-header">
                <div>
                    <h1>Package Enquiries</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        Package Enquiries
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="flash-success"><i class="fa fa-circle-check"></i> {{ session('success') }}</div>
            @endif

            <!-- Status tabs -->
            <div class="filter-tabs">
                <a class="filter-tab {{ request('status') ? '' : 'active' }}"
                    href="{{ route('admin.package-enquiries.index', request()->except('status', 'page')) }}">
                    All <b>{{ $counts->sum() }}</b>
                </a>
                @foreach (\App\Models\PackageEnquiry::STATUSES as $key => $label)
                    <a class="filter-tab {{ request('status') === $key ? 'active' : '' }}"
                        href="{{ route('admin.package-enquiries.index', array_merge(request()->except('page'), ['status' => $key])) }}">
                        {{ $label }} <b>{{ $counts[$key] ?? 0 }}</b>
                    </a>
                @endforeach
            </div>

            <!-- Main card -->
            <div class="list-card">

                <!-- Filters -->
                <form method="GET" action="{{ route('admin.package-enquiries.index') }}" class="list-toolbar">
                    @if (request('status'))
                        <input type="hidden" name="status" value="{{ request('status') }}">
                    @endif
                    <input type="text" name="q" value="{{ request('q') }}" class="field-input"
                        placeholder="Search name, email, mobile, business, requirements">
                    <select name="page_key" class="field-select">
                        <option value="">All packages</option>
                        @foreach ($pages as $pageKey)
                            <option value="{{ $pageKey }}" {{ request('page_key') === $pageKey ? 'selected' : '' }}>
                                {{ \Illuminate\Support\Str::headline($pageKey) }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn-primary-dash"><i class="fa fa-search"></i> Filter</button>
                    @if (request()->hasAny(['q', 'page_key', 'status']))
                        <a href="{{ route('admin.package-enquiries.index') }}" class="btn-secondary-dash">Reset</a>
                    @endif
                </form>

                <div style="overflow-x:auto">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width:60px">ID</th>
                                <th>Contact</th>
                                <th style="width:170px">Package</th>
                                <th>Requirements</th>
                                <th style="width:130px">Received</th>
                                <th style="width:110px">Status</th>
                                <th style="width:90px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($enquiries as $enquiry)
                                <tr id="row{{ $enquiry->id }}" class="{{ $enquiry->status === 'new' ? 'is-new' : '' }}">

                                    <td><span class="id-chip">{{ $enquiry->id }}</span></td>

                                    <td>
                                        <div class="row-title">{{ $enquiry->name }}</div>
                                        @if ($enquiry->email)
                                            <div class="row-sub">{{ $enquiry->email }}</div>
                                        @endif
                                        <div class="row-sub">
                                            {{ $enquiry->mobile }}
                                            @if ($enquiry->mobile_verified)
                                                <span class="mv-pill yes" title="Mobile number verified with OTP">
                                                    <i class="fa fa-circle-check"></i> Verified
                                                </span>
                                            @else
                                                <span class="mv-pill no" title="Mobile number was not verified">
                                                    <i class="fa fa-circle-exclamation"></i> Not verified
                                                </span>
                                            @endif
                                        </div>
                                        @if ($enquiry->business_name)
                                            <div class="row-sub">{{ $enquiry->business_name }}@if ($enquiry->business_type) · {{ $enquiry->business_type }}@endif</div>
                                        @elseif ($enquiry->business_type)
                                            <div class="row-sub">{{ $enquiry->business_type }}</div>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($enquiry->page)
                                            <span class="pill pill-type">{{ $enquiry->page_label }}</span>
                                        @else
                                            —
                                        @endif
                                    </td>

                                    <td class="inbox-snippet">
                                        {{ $enquiry->requirements ? \Illuminate\Support\Str::limit($enquiry->requirements, 90) : '—' }}
                                    </td>

                                    <td style="white-space:nowrap">
                                        {{ $enquiry->created_at->format('d M Y') }}
                                        <div class="row-sub">{{ $enquiry->created_at->format('h:i A') }}</div>
                                    </td>

                                    <td><span class="pill pill-{{ $enquiry->status }}">{{ $enquiry->status }}</span></td>

                                    <td>
                                        <div style="display:flex;gap:6px">
                                            <a href="{{ route('admin.package-enquiries.show', $enquiry) }}"
                                                class="action-btn view" title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <button type="button" class="action-btn danger" title="Delete"
                                                onclick="deleteEnquiry({{ $enquiry->id }})">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <form id="del{{ $enquiry->id }}" method="POST" style="display:none"
                                                action="{{ route('admin.package-enquiries.destroy', $enquiry) }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">
                                        <div class="empty-state">
                                            <div class="empty-icon-wrap">
                                                <i class="fa fa-inbox"></i>
                                            </div>
                                            <h6>No Enquiries Found</h6>
                                            <p>Enquiries sent from the package pages will show up here.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                @if ($enquiries->hasPages())
                    <div class="pagination-bar">
                        {{ $enquiries->links('pagination::bootstrap-4') }}
                    </div>
                @endif

            </div>

        </div>
    </div>
</div>

@include('admin.footer')

<script>
    function deleteEnquiry(id) {
        Swal.fire({
            title: 'Delete Enquiry?',
            text: 'This action cannot be undone.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('del' + id).submit();
            }
        });
    }
</script>