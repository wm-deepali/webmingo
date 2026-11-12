{{-- Destination: resources/views/admin/career-applications/show.blade.php --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <style>
        .mv-pill { display:inline-flex;align-items:center;gap:4px;margin-left:8px;padding:1px 8px;border-radius:20px;border:1px solid transparent;font-size:11px;font-weight:700;line-height:1.6;white-space:nowrap;vertical-align:middle; }
        .mv-pill i { font-size:10px; }
        .mv-pill.yes { background:#e3f1ec;color:#007a5e;border-color:#9fcfc3; }
        .mv-pill.no  { background:#fff5cc;color:#916a00;border-color:#e8d080; }
        .dup-banner { background:#fef3f2;border:1px solid #fecdca;color:#b42318;padding:12px 16px;border-radius:10px;margin-bottom:16px;font-size:13.5px; }
        .stage-pill { display:inline-block;padding:2px 10px;border-radius:20px;font-size:12px;font-weight:700;background:#e8f0fe;color:#1d4ed8; }
        .log-item { padding:8px 0;border-bottom:1px solid #eef0f3;font-size:13px; }
        .log-item:last-child { border-bottom:0; }
        .log-item small { color:#98a2b3;display:block; }
    </style>

    <div class="app-content content container-fluid">
        <div class="edit-page">

            <div class="edit-page-header">
                <div>
                    <h1>View Candidate</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a><span>›</span>
                        <a href="{{ route('admin.career-applications.index') }}">Recruitment</a><span>›</span> View
                    </div>
                </div>
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
                <div class="form-errors"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif

            @if ($application->duplicateOf)
                <div class="dup-banner">
                    <i class="fa fa-clone"></i> This looks like a duplicate of
                    <a href="{{ route('admin.career-applications.show', $application->duplicateOf) }}"><b>#{{ $application->duplicateOf->id }} {{ $application->duplicateOf->name }}</b></a>
                    ({{ $application->duplicateOf->position }}). Keep one profile only — shift the original to the right opening and delete this one.
                </div>
            @endif
            @if ($application->duplicates->isNotEmpty())
                <div class="dup-banner">
                    <i class="fa fa-clone"></i> The same candidate applied again:
                    @foreach ($application->duplicates as $d)
                        <a href="{{ route('admin.career-applications.show', $d) }}">#{{ $d->id }} ({{ $d->position }})</a>{{ $loop->last ? '' : ',' }}
                    @endforeach
                </div>
            @endif

            <div class="edit-layout">

                <!-- LEFT -->
                <div>
                    <div class="section-card">
                        <div class="section-card-header"><h5>Applicant</h5></div>
                        <div class="section-card-body">
                            <dl class="inbox-kv">
                                <dt>Name</dt><dd>{{ $application->name }}</dd>
                                <dt>Email</dt><dd><a href="mailto:{{ $application->email }}">{{ $application->email }}</a></dd>
                                <dt>Phone</dt>
                                <dd>
                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', $application->phone) }}">{{ $application->phone }}</a>
                                    @if ($application->mobile_verified)
                                        <span class="mv-pill yes"><i class="fa fa-circle-check"></i> Verified</span>
                                    @else
                                        <span class="mv-pill no"><i class="fa fa-circle-exclamation"></i> Not verified</span>
                                    @endif
                                </dd>
                                <dt>Location</dt><dd>{{ $application->location ?: '—' }}</dd>
                                <dt>Portfolio</dt>
                                <dd>@if ($application->portfolio)<a href="{{ $application->portfolio }}" target="_blank" rel="noopener noreferrer">{{ $application->portfolio }}</a>@else — @endif</dd>
                                <dt>LinkedIn</dt>
                                <dd>@if ($application->linkedin)<a href="{{ $application->linkedin }}" target="_blank" rel="noopener noreferrer">{{ $application->linkedin }}</a>@else — @endif</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Interest &amp; Commercials</h5></div>
                        <div class="section-card-body">
                            <dl class="inbox-kv">
                                <dt>Interested</dt><dd>{{ \App\Support\Recruitment::INTERESTED[$application->candidate_interested] ?? '—' }}</dd>
                                <dt>Work mode</dt><dd>{{ $application->work_mode ?: '—' }}</dd>
                                <dt>Notice period</dt><dd>{{ \App\Support\Recruitment::NOTICE_PERIODS[$application->notice_period] ?? ($application->notice_period ?: '—') }}</dd>
                                <dt>Can join from</dt><dd>{{ $application->available_from?->format('d M Y') ?: '—' }}</dd>
                                <dt>Total exp</dt><dd>{{ $application->total_experience !== null ? $application->total_experience . ' yrs' : '—' }}</dd>
                                <dt>Relevant exp</dt><dd>{{ $application->relevant_experience !== null ? $application->relevant_experience . ' yrs' : '—' }}</dd>
                                <dt>Current CTC</dt><dd>{{ $application->current_ctc !== null ? $application->current_ctc . ' LPA' : '—' }}</dd>
                                <dt>Expected CTC</dt><dd>{{ $application->expected_ctc !== null ? $application->expected_ctc . ' LPA' : '—' }}</dd>
                                <dt>Offered / Budget</dt><dd>{{ $application->offered_ctc !== null ? $application->offered_ctc . ' LPA' : '—' }}</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Recruiter Remarks</h5></div>
                        <div class="section-card-body">
                            @if ($application->recruiter_remarks)
                                <div class="inbox-message">{{ $application->recruiter_remarks }}</div>
                            @else
                                <p style="margin:0;color:var(--text-hint);font-size:13.5px">No remarks yet.</p>
                            @endif
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
                                <dt>Opening</dt><dd>{{ $application->position }}</dd>
                                <dt>Type</dt><dd><span class="pill pill-type">{{ $application->apply_type }}</span></dd>
                                <dt>Source</dt><dd>{{ \App\Support\Recruitment::SOURCES[$application->source] ?? $application->source }}</dd>
                                <dt>Received</dt><dd>{{ $application->created_at->format('d M Y, h:i A') }}</dd>
                                <dt>Verified</dt>
                                <dd>
                                    @if ($application->mobile_verified)
                                        Yes
                                        @if ($application->mobile_verified_at)
                                            <div style="font-size:12px;color:var(--text-hint)">{{ \Illuminate\Support\Carbon::parse($application->mobile_verified_at)->format('d M Y, h:i A') }}</div>
                                        @endif
                                    @else
                                        No
                                    @endif
                                </dd>
                                <dt>IP address</dt><dd>{{ $application->ip_address ?: '—' }}</dd>
                            </dl>
                            <div class="inbox-btnrow" style="margin-top:18px;display:flex;gap:8px;flex-wrap:wrap">
                                <a href="{{ route('admin.career-applications.resume', $application) }}" class="btn-primary-dash"><i class="fa fa-download"></i> Resume</a>
                                <a href="{{ route('admin.career-applications.edit', $application) }}" class="btn-secondary-dash"><i class="fa fa-pen"></i> Edit</a>
                            </div>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Stage</h5></div>
                        <div class="section-card-body">
                            <p style="margin:0 0 14px">
                                <span class="stage-pill">{{ $application->stage?->title ?? 'New Application' }}</span>
                                @if ($application->reason)
                                    <span style="font-size:13px;color:#667085"> · {{ $application->reason->title }}</span>
                                @endif
                            </p>
                            @if ($application->reason_remarks)
                                <p style="font-size:13px;color:#667085;margin:-6px 0 14px">{{ $application->reason_remarks }}</p>
                            @endif

                            <form action="{{ route('admin.career-applications.stage', $application) }}" method="POST">
                                @csrf
                                <div class="field-group"><label class="field-label">Move to stage</label>
                                    <select name="stage_id" class="field-select">
                                        @foreach ($stages as $s)
                                            <option value="{{ $s->id }}" {{ (int) $application->stage_id === $s->id ? 'selected' : '' }}>{{ $s->title }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="field-group"><label class="field-label">Reason (needed for Shortlisted / Closed)</label>
                                    <select name="reason_id" class="field-select">
                                        <option value="">—</option>
                                        @foreach ($reasons as $r)
                                            <option value="{{ $r->id }}" {{ (int) $application->reason_id === $r->id ? 'selected' : '' }}>{{ $r->title }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="field-group"><label class="field-label">Remarks</label>
                                    <textarea name="reason_remarks" rows="2" class="field-input">{{ old('reason_remarks', $application->reason_remarks) }}</textarea></div>
                                <button type="submit" class="btn-primary-dash"><i class="fa fa-save"></i> Update Stage</button>
                            </form>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Shift to Another Opening</h5></div>
                        <div class="section-card-body">
                            <form action="{{ route('admin.career-applications.shift', $application) }}" method="POST">
                                @csrf
                                <div class="field-group"><label class="field-label">Opening</label>
                                    <select name="career_id" class="field-select">
                                        <option value="">Other (type below)</option>
                                        @foreach ($careers as $c)
                                            <option value="{{ $c->id }}" {{ (int) $application->career_id === $c->id ? 'selected' : '' }}>{{ $c->title }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="field-group"><label class="field-label">Position (if not in the list)</label>
                                    <input name="position_other" class="field-input"></div>
                                <button type="submit" class="btn-secondary-dash"><i class="fa fa-right-left"></i> Shift Candidate</button>
                            </form>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Activity</h5></div>
                        <div class="section-card-body">
                            @forelse ($application->logs as $log)
                                <div class="log-item">
                                    @switch($log->type)
                                        @case('stage') Stage: <b>{{ $log->from_value ?: '—' }}</b> → <b>{{ $log->to_value }}</b> @break
                                        @case('shift') Opening: <b>{{ $log->from_value ?: '—' }}</b> → <b>{{ $log->to_value }}</b> @break
                                        @case('created') Candidate added @break
                                        @default Details updated
                                    @endswitch
                                    @if ($log->note)<div style="color:#667085">{{ $log->note }}</div>@endif
                                    <small>{{ $log->created_at->format('d M Y, h:i A') }}</small>
                                </div>
                            @empty
                                <p style="margin:0;color:var(--text-hint);font-size:13px">No activity yet.</p>
                            @endforelse
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Danger Zone</h5></div>
                        <div class="section-card-body">
                            <p style="margin:0 0 12px;font-size:12.5px;color:var(--text-hint)">Deleting removes the application and its resume permanently.</p>
                            <button type="button" class="btn-danger-dash" onclick="deleteApplication()"><i class="fa fa-trash"></i> Delete Application</button>
                            <form id="deleteForm" method="POST" style="display:none" action="{{ route('admin.career-applications.destroy', $application) }}">
                                @csrf @method('DELETE')
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-card" style="margin-top:20px;margin-bottom:0">
                <div class="section-card-body" style="display:flex;justify-content:flex-end;gap:10px;padding:14px 20px">
                    <a href="{{ route('admin.career-applications.index') }}" class="btn-secondary-dash"><i class="fa fa-arrow-left"></i> Back to candidates</a>
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
        icon: 'warning', showCancelButton: true, confirmButtonColor: '#d33', confirmButtonText: 'Yes, Delete'
    }).then((result) => { if (result.isConfirmed) { document.getElementById('deleteForm').submit(); } });
}
</script>
