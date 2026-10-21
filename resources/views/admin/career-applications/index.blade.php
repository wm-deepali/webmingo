{{-- Destination: resources/views/admin/career-applications/index.blade.php --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <div class="app-content content container-fluid">
        <div class="list-page">

            <!-- Page header -->
            <div class="list-page-header">
                <div>
                    <h1>Job Applications</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        Job Applications
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="flash-success"><i class="fa fa-circle-check"></i> {{ session('success') }}</div>
            @endif

            <!-- Status tabs -->
            <div class="filter-tabs">
                <a class="filter-tab {{ request('status') ? '' : 'active' }}"
                   href="{{ route('admin.career-applications.index', request()->except('status', 'page')) }}">
                    All <b>{{ $counts->sum() }}</b>
                </a>
                @foreach (['new' => 'New', 'shortlisted' => 'Shortlisted', 'rejected' => 'Rejected', 'hired' => 'Hired'] as $key => $label)
                    <a class="filter-tab {{ request('status') === $key ? 'active' : '' }}"
                       href="{{ route('admin.career-applications.index', array_merge(request()->except('page'), ['status' => $key])) }}">
                        {{ $label }} <b>{{ $counts[$key] ?? 0 }}</b>
                    </a>
                @endforeach
            </div>

            <!-- Main card -->
            <div class="list-card">

                <!-- Filters -->
                <form method="GET" action="{{ route('admin.career-applications.index') }}" class="list-toolbar">
                    @if (request('status'))
                        <input type="hidden" name="status" value="{{ request('status') }}">
                    @endif
                    <input type="text" name="q" value="{{ request('q') }}" class="field-input"
                           placeholder="Search name, email, phone, position">
                    <select name="position" class="field-select">
                        <option value="">All positions</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position }}" {{ request('position') === $position ? 'selected' : '' }}>{{ $position }}</option>
                        @endforeach
                    </select>
                    <select name="apply_type" class="field-select">
                        <option value="">Job &amp; Internship</option>
                        @foreach (['Job', 'Internship'] as $type)
                            <option value="{{ $type }}" {{ request('apply_type') === $type ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn-primary-dash"><i class="fa fa-search"></i> Filter</button>
                    @if (request()->hasAny(['q', 'position', 'apply_type', 'status']))
                        <a href="{{ route('admin.career-applications.index') }}" class="btn-secondary-dash">Reset</a>
                    @endif
                </form>

                <div style="overflow-x:auto">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width:60px">ID</th>
                                <th>Applicant</th>
                                <th>Position</th>
                                <th style="width:120px">Experience</th>
                                <th style="width:130px">Received</th>
                                <th style="width:120px">Status</th>
                                <th style="width:120px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($applications as $application)
                                <tr id="row{{ $application->id }}" class="{{ $application->status === 'new' ? 'is-new' : '' }}">

                                    <td><span class="id-chip">{{ $application->id }}</span></td>

                                    <td>
                                        <div class="row-title">{{ $application->name }}</div>
                                        <div class="row-sub">{{ $application->email }}</div>
                                        <div class="row-sub">{{ $application->phone }}</div>
                                    </td>

                                    <td>
                                        <div class="row-title">{{ $application->position }}</div>
                                        <div class="row-sub">
                                            <span class="pill pill-type">{{ $application->apply_type }}</span>
                                        </div>
                                    </td>

                                    <td>{{ $application->experience ?: '—' }}</td>

                                    <td style="white-space:nowrap">
                                        {{ $application->created_at->format('d M Y') }}
                                        <div class="row-sub">{{ $application->created_at->format('h:i A') }}</div>
                                    </td>

                                    <td><span class="pill pill-{{ $application->status }}">{{ $application->status }}</span></td>

                                    <td>
                                        <div style="display:flex;gap:6px">
                                            <a href="{{ route('admin.career-applications.show', $application) }}"
                                               class="action-btn view" title="View">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.career-applications.resume', $application) }}"
                                               class="action-btn view" title="Download Resume">
                                                <i class="fa fa-download"></i>
                                            </a>
                                            <button type="button" class="action-btn danger" title="Delete"
                                                    onclick="deleteApplication({{ $application->id }})">
                                                <i class="fa fa-trash"></i>
                                            </button>

                                            <form id="del{{ $application->id }}" method="POST" style="display:none"
                                                  action="{{ route('admin.career-applications.destroy', $application) }}">
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
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <h6>No Applications Found</h6>
                                            <p>Job and internship applications will show up here.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                @if ($applications->hasPages())
                    <div class="pagination-bar">
                        {{ $applications->links('pagination::bootstrap-4') }}
                    </div>
                @endif

            </div>

        </div>
    </div>
</div>

@include('admin.footer')

<script>
function deleteApplication(id) {
    Swal.fire({
        title: 'Delete Application?',
        text: 'The application and its resume will be permanently deleted.',
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