{{-- Destination: resources/views/admin/career-applications/show.blade.php --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <div class="app-content content container-fluid">
        <div class="edit-page">

            <!-- Page header -->
            <div class="edit-page-header">
                <div>
                    <h1>View Application</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        <a href="{{ route('admin.career-applications.index') }}">Job Applications</a>
                        <span>›</span>
                        View
                    </div>
                </div>

                <!-- Identity chip -->
                <div class="identity-chip">
                    <div class="identity-avatar">{{ \Illuminate\Support\Str::substr($application->name, 0, 1) }}</div>
                    <div>
                        <div class="identity-name">{{ $application->name }}</div>
                        <div class="identity-sub">{{ $application->position }} · ID #{{ $application->id }}</div>
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
                    <div class="section-card">
                        <div class="section-card-header"><h5>Applicant</h5></div>
                        <div class="section-card-body">
                            <dl class="inbox-kv">
                                <dt>Name</dt>
                                <dd>{{ $application->name }}</dd>

                                <dt>Email</dt>
                                <dd><a href="mailto:{{ $application->email }}">{{ $application->email }}</a></dd>

                                <dt>Phone</dt>
                                <dd><a href="tel:{{ preg_replace('/[^0-9+]/', '', $application->phone) }}">{{ $application->phone }}</a></dd>

                                <dt>Location</dt>
                                <dd>{{ $application->location ?: '—' }}</dd>

                                <dt>Experience</dt>
                                <dd>{{ $application->experience ?: '—' }}</dd>

                                <dt>Notice period</dt>
                                <dd>{{ $application->notice_period ?: '—' }}</dd>

                                <dt>Portfolio</dt>
                                <dd>
                                    @if ($application->portfolio)
                                        <a href="{{ $application->portfolio }}" target="_blank" rel="noopener noreferrer">{{ $application->portfolio }}</a>
                                    @else
                                        —
                                    @endif
                                </dd>

                                <dt>LinkedIn</dt>
                                <dd>
                                    @if ($application->linkedin)
                                        <a href="{{ $application->linkedin }}" target="_blank" rel="noopener noreferrer">{{ $application->linkedin }}</a>
                                    @else
                                        —
                                    @endif
                                </dd>
                            </dl>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Cover Letter</h5></div>
                        <div class="section-card-body">
                            @if ($application->cover_letter)
                                <div class="inbox-message">{{ $application->cover_letter }}</div>
                            @else
                                <p style="margin:0;color:var(--text-hint);font-size:13.5px">No cover letter provided.</p>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div>
                    <div class="section-card">
                        <div class="section-card-header"><h5>Application</h5></div>
                        <div class="section-card-body">
                            <dl class="inbox-kv" style="grid-template-columns:100px 1fr">
                                <dt>Position</dt>
                                <dd>{{ $application->position }}</dd>

                                <dt>Type</dt>
                                <dd><span class="pill pill-type">{{ $application->apply_type }}</span></dd>

                                <dt>Received</dt>
                                <dd>{{ $application->created_at->format('d M Y, h:i A') }}</dd>

                                <dt>IP address</dt>
                                <dd>{{ $application->ip_address ?: '—' }}</dd>
                            </dl>

                            <div class="inbox-btnrow" style="margin-top:18px">
                                <a href="{{ route('admin.career-applications.resume', $application) }}" class="btn-primary-dash">
                                    <i class="fa fa-download"></i> Download Resume
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Status</h5></div>
                        <div class="section-card-body">
                            <p style="margin:0 0 14px">
                                <span class="pill pill-{{ $application->status }}">{{ $application->status }}</span>
                            </p>

                            <form action="{{ route('admin.career-applications.update', $application) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="field-group">
                                    <label class="field-label">Change status</label>
                                    <select name="status" class="field-select">
                                        @foreach (['new' => 'New', 'shortlisted' => 'Shortlisted', 'rejected' => 'Rejected', 'hired' => 'Hired'] as $key => $label)
                                            <option value="{{ $key }}" {{ $application->status === $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn-primary-dash"><i class="fa fa-save"></i> Update Status</button>
                            </form>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Danger Zone</h5></div>
                        <div class="section-card-body">
                            <p style="margin:0 0 12px;font-size:12.5px;color:var(--text-hint)">
                                Deleting removes the application and its resume permanently.
                            </p>
                            <button type="button" class="btn-danger-dash" onclick="deleteApplication()">
                                <i class="fa fa-trash"></i> Delete Application
                            </button>

                            <form id="deleteForm" method="POST" style="display:none"
                                  action="{{ route('admin.career-applications.destroy', $application) }}">
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
                    <a href="{{ route('admin.career-applications.index') }}" class="btn-secondary-dash">
                        <i class="fa fa-arrow-left"></i> Back to applications
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@include('admin.footer')

<script>
function deleteApplication() {
    Swal.fire({
        title: 'Delete Application?',
        text: 'The application and its resume will be permanently deleted.',
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