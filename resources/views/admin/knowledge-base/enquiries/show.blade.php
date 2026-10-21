{{-- resources/views/admin/knowledge-base/enquiries/show.blade.php --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <div class="app-content content container-fluid">
        <div class="edit-page">

            <!-- Page header -->
            <div class="edit-page-header">
                <div>
                    <h1>View Enquiry</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        <a href="{{ route('admin.kb-enquiries.index') }}">Knowledge Base Enquiries</a>
                        <span>›</span>
                        View
                    </div>
                </div>

                <!-- Identity chip -->
                <div class="identity-chip">
                    <div class="identity-avatar">{{ \Illuminate\Support\Str::substr($enquiry->name, 0, 1) }}</div>
                    <div>
                        <div class="identity-name">{{ $enquiry->name }}</div>
                        <div class="identity-sub">{{ $enquiry->need_label }} · ID #{{ $enquiry->id }}</div>
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
                        <div class="section-card-header"><h5>Message</h5></div>
                        <div class="section-card-body">
                            <div class="inbox-message">{{ $enquiry->message }}</div>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Contact Details</h5></div>
                        <div class="section-card-body">
                            <dl class="inbox-kv">
                                <dt>Name</dt>
                                <dd>{{ $enquiry->name }}</dd>

                                <dt>Email</dt>
                                <dd><a href="mailto:{{ $enquiry->email }}">{{ $enquiry->email }}</a></dd>

                                <dt>Phone</dt>
                                <dd>
                                    @if ($enquiry->phone)
                                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $enquiry->phone) }}">{{ $enquiry->phone }}</a>
                                    @else
                                        —
                                    @endif
                                </dd>

                                <dt>Needs Help With</dt>
                                <dd><span class="pill pill-type">{{ $enquiry->need_label }}</span></dd>

                                <dt>Source</dt>
                                <dd>Knowledge Base consultation form</dd>

                                <dt>Received</dt>
                                <dd>{{ $enquiry->created_at->format('d M Y, h:i A') }}</dd>

                                <dt>IP address</dt>
                                <dd>{{ $enquiry->ip_address ?: '—' }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <!-- RIGHT -->
                <div>
                    <div class="section-card">
                        <div class="section-card-header"><h5>Status</h5></div>
                        <div class="section-card-body">
                            <p style="margin:0 0 14px">
                                <span class="pill pill-{{ $enquiry->status }}">{{ $enquiry->status }}</span>
                            </p>

                            <form action="{{ route('admin.kb-enquiries.update', $enquiry) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="field-group">
                                    <label class="field-label">Change status</label>
                                    <select name="status" class="field-select">
                                        @foreach (\App\Models\KnowledgeBaseEnquiry::STATUSES as $key => $label)
                                            <option value="{{ $key }}" {{ $enquiry->status === $key ? 'selected' : '' }}>{{ $label }}</option>
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
                                Deleting removes this enquiry permanently.
                            </p>
                            <button type="button" class="btn-danger-dash" onclick="deleteEnquiry()">
                                <i class="fa fa-trash"></i> Delete Enquiry
                            </button>

                            <form id="deleteForm" method="POST" style="display:none"
                                  action="{{ route('admin.kb-enquiries.destroy', $enquiry) }}">
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
                    <a href="{{ route('admin.kb-enquiries.index') }}" class="btn-secondary-dash">
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