{{-- Destination: resources/views/admin/package-enquiries/show.blade.php --}}
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
            margin-left: 8px;
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

    @php
        // Page-specific extra fields: show only the ones that actually have a value
        $extra = collect($enquiry->extra ?? [])->filter(fn($value) => filled($value));
    @endphp

    <div class="app-content content container-fluid">
        <div class="edit-page">

            <!-- Page header -->
            <div class="edit-page-header">
                <div>
                    <h1>View Package Enquiry</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        <a href="{{ route('admin.package-enquiries.index') }}">Package Enquiries</a>
                        <span>›</span>
                        View
                    </div>
                </div>

                <!-- Identity chip -->
                <div class="identity-chip">
                    <div class="identity-avatar">{{ \Illuminate\Support\Str::substr($enquiry->name, 0, 1) }}</div>
                    <div>
                        <div class="identity-name">{{ $enquiry->name }}</div>
                        <div class="identity-sub">{{ $enquiry->page ? $enquiry->page_label : 'Package enquiry' }} · ID #{{ $enquiry->id }}</div>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="flash-success"><i class="fa fa-circle-check"></i> {{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="form-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="edit-layout">

                <!-- LEFT -->
                <div>
                    @if ($enquiry->requirements)
                        <div class="section-card">
                            <div class="section-card-header">
                                <h5>Requirements</h5>
                            </div>
                            <div class="section-card-body">
                                <div class="inbox-message">{{ $enquiry->requirements }}</div>
                            </div>
                        </div>
                    @endif

                    <div class="section-card">
                        <div class="section-card-header">
                            <h5>Contact Details</h5>
                        </div>
                        <div class="section-card-body">
                            <dl class="inbox-kv">
                                <dt>Name</dt>
                                <dd>{{ $enquiry->name }}</dd>

                                @if ($enquiry->email)
                                    <dt>Email</dt>
                                    <dd><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></dd>
                                @endif

                                <dt>Mobile</dt>
                                <dd>
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $enquiry->mobile) }}">{{ $enquiry->mobile }}</a>
                                    @if ($enquiry->mobile_verified)
                                        <span class="mv-pill yes"><i class="fa fa-circle-check"></i> Verified</span>
                                    @else
                                        <span class="mv-pill no"><i class="fa fa-circle-exclamation"></i> Not verified</span>
                                    @endif
                                </dd>

                                @if ($enquiry->business_name)
                                    <dt>Business Name</dt>
                                    <dd>{{ $enquiry->business_name }}</dd>
                                @endif

                                <dt>Business Type</dt>
                                <dd>{{ $enquiry->business_type ?: '—' }}</dd>

                                <dt>Package</dt>
                                <dd>
                                    @if ($enquiry->page)
                                        <span class="pill pill-type">{{ $enquiry->page_label }}</span>
                                    @else
                                        —
                                    @endif
                                </dd>

                                @if ($enquiry->page_url)
                                    <dt>Page URL</dt>
                                    <dd><a href="{{ $enquiry->page_url }}" target="_blank" rel="noopener">{{ $enquiry->page_url }}</a></dd>
                                @endif

                                <dt>Received</dt>
                                <dd>{{ $enquiry->created_at->format('d M Y, h:i A') }}</dd>

                                <dt>Verified</dt>
                                <dd>
                                    @if ($enquiry->mobile_verified)
                                        Yes
                                        @if ($enquiry->mobile_verified_at)
                                            <div style="font-size:12px;color:var(--text-hint)">
                                                {{ $enquiry->mobile_verified_at->format('d M Y, h:i A') }}
                                            </div>
                                        @endif
                                    @else
                                        No
                                        <div style="font-size:12px;color:var(--text-hint)">Mobile OTP was not completed</div>
                                    @endif
                                </dd>

                                @if ($enquiry->admin_notified_at)
                                    <dt>Admin notified</dt>
                                    <dd>{{ $enquiry->admin_notified_at->format('d M Y, h:i A') }}</dd>
                                @endif

                                <dt>IP address</dt>
                                <dd>{{ $enquiry->ip_address ?: '—' }}</dd>
                            </dl>
                        </div>
                    </div>

                    @if ($extra->isNotEmpty())
                        <div class="section-card">
                            <div class="section-card-header">
                                <h5>Additional Details</h5>
                            </div>
                            <div class="section-card-body">
                                <dl class="inbox-kv">
                                    @foreach ($extra as $key => $value)
                                        <dt>{{ \Illuminate\Support\Str::headline($key) }}</dt>
                                        <dd>{{ is_array($value) ? implode(', ', $value) : $value }}</dd>
                                    @endforeach
                                </dl>
                            </div>
                        </div>
                    @endif
                </div>

                <!-- RIGHT -->
                <div>
                    <div class="section-card">
                        <div class="section-card-header">
                            <h5>Status</h5>
                        </div>
                        <div class="section-card-body">
                            <p style="margin:0 0 14px">
                                <span class="pill pill-{{ $enquiry->status }}">{{ $enquiry->status }}</span>
                            </p>

                            <form action="{{ route('admin.package-enquiries.update', $enquiry) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="field-group">
                                    <label class="field-label">Change status</label>
                                    <select name="status" class="field-select">
                                        @foreach (\App\Models\PackageEnquiry::STATUSES as $key => $label)
                                            <option value="{{ $key }}" {{ $enquiry->status === $key ? 'selected' : '' }}>
                                                {{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn-primary-dash"><i class="fa fa-save"></i> Update
                                    Status</button>
                            </form>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header">
                            <h5>Danger Zone</h5>
                        </div>
                        <div class="section-card-body">
                            <p style="margin:0 0 12px;font-size:12.5px;color:var(--text-hint)">
                                Deleting removes this enquiry permanently.
                            </p>
                            <button type="button" class="btn-danger-dash" onclick="deleteEnquiry()">
                                <i class="fa fa-trash"></i> Delete Enquiry
                            </button>

                            <form id="deleteForm" method="POST" style="display:none"
                                action="{{ route('admin.package-enquiries.destroy', $enquiry) }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Action bar -->
            <div class="section-card" style="margin-top:20px;margin-bottom:0">
                <div class="section-card-body" style="display:flex;justify-content:flex-end;gap:10px;padding:14px 20px">
                    <a href="{{ route('admin.package-enquiries.index') }}" class="btn-secondary-dash">
                        <i class="fa fa-arrow-left"></i> Back to enquiries
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@include('admin.footer')

<script>
    function deleteEnquiry() {
        Swal.fire({
            title: 'Delete Enquiry?',
            text: 'This action cannot be undone.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes, Delete'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('deleteForm').submit();
            }
        });
    }
</script>