{{-- Destination: resources/views/admin/career-applications/index.blade.php --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <style>
        .mv-pill { display:inline-flex;align-items:center;gap:4px;margin-left:6px;padding:1px 8px;border-radius:20px;border:1px solid transparent;font-size:11px;font-weight:700;line-height:1.6;white-space:nowrap;vertical-align:middle; }
        .mv-pill i { font-size:10px; }
        .mv-pill.yes { background:#e3f1ec;color:#007a5e;border-color:#9fcfc3; }
        .mv-pill.no  { background:#fff5cc;color:#916a00;border-color:#e8d080; }
        .mv-pill.dup { background:#fde8e8;color:#b42318;border-color:#f5b5b0; }
        .stage-pill { display:inline-block;padding:2px 10px;border-radius:20px;font-size:12px;font-weight:700;background:#eef0f3;color:#344054; }
        .stage-pill.b-new { background:#e8f0fe;color:#1d4ed8; }
        .stage-pill.b-shortlisted { background:#f3e8ff;color:#7e22ce; }
        .stage-pill.b-interview { background:#fff5cc;color:#916a00; }
        .stage-pill.b-offered { background:#e0f2fe;color:#0369a1; }
        .stage-pill.b-joined { background:#e3f1ec;color:#007a5e; }
        .stage-pill.b-closed { background:#f2f4f7;color:#667085; }
        .adv-filters { margin-top:10px; }
        .adv-filters summary { cursor:pointer;font-weight:600;font-size:13px; }
        .adv-grid { display:grid;grid-template-columns:repeat(auto-fill,minmax(170px,1fr));gap:10px;margin-top:10px; }
        .adv-grid label { display:block;font-size:11.5px;color:#667085;margin-bottom:2px; }
    </style>

    <div class="app-content content container-fluid">
        <div class="list-page">

            <div class="list-page-header">
                <div>
                    <h1>Recruitment — Candidates</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a><span>›</span> Recruitment
                    </div>
                </div>
                <div style="display:flex;gap:8px;flex-wrap:wrap">
                    <a href="{{ route('admin.career-applications.create') }}" class="btn-primary-dash"><i class="fa fa-plus"></i> Add Candidate</a>
                    <a href="{{ route('admin.career-applications.export', request()->query()) }}" class="btn-secondary-dash"><i class="fa fa-file-csv"></i> Export CSV</a>
                    <a href="{{ route('admin.recruitment.masters', 'stages') }}" class="btn-secondary-dash"><i class="fa fa-list-check"></i> Stages</a>
                    <a href="{{ route('admin.recruitment.masters', 'reasons') }}" class="btn-secondary-dash"><i class="fa fa-comment-dots"></i> Reasons</a>
                </div>
            </div>

            @if (session('success'))
                <div class="flash-success"><i class="fa fa-circle-check"></i> {{ session('success') }}</div>
            @endif

            <!-- Stage tabs -->
            <div class="filter-tabs">
                <a class="filter-tab {{ request('stage_id') ? '' : 'active' }}"
                   href="{{ route('admin.career-applications.index', request()->except('stage_id', 'bucket', 'page')) }}">
                    All <b>{{ $total }}</b>
                </a>
                @foreach ($stages as $stage)
                    <a class="filter-tab {{ (string) request('stage_id') === (string) $stage->id ? 'active' : '' }}"
                       href="{{ route('admin.career-applications.index', array_merge(request()->except('page', 'bucket'), ['stage_id' => $stage->id])) }}">
                        {{ $stage->title }} <b>{{ $counts[$stage->id] ?? 0 }}</b>
                    </a>
                @endforeach
            </div>

            <div class="list-card">

                <!-- Filters -->
                <form method="GET" action="{{ route('admin.career-applications.index') }}" class="list-toolbar" style="flex-wrap:wrap">
                    @if (request('stage_id'))
                        <input type="hidden" name="stage_id" value="{{ request('stage_id') }}">
                    @endif
                    @if (request('bucket'))
                        <input type="hidden" name="bucket" value="{{ request('bucket') }}">
                    @endif

                    <input type="text" name="q" value="{{ request('q') }}" class="field-input"
                           placeholder="Search name, email, phone, position, remarks">

                    <select name="career_id" class="field-select">
                        <option value="">All openings</option>
                        @foreach ($careers as $c)
                            <option value="{{ $c->id }}" {{ (string) request('career_id') === (string) $c->id ? 'selected' : '' }}>{{ $c->title }}</option>
                        @endforeach
                    </select>

                    <select name="source" class="field-select">
                        <option value="">All sources</option>
                        @foreach (\App\Support\Recruitment::SOURCES as $k => $label)
                            <option value="{{ $k }}" {{ request('source') === $k ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>

                    <select name="notice_period" class="field-select">
                        <option value="">Any notice period</option>
                        @foreach (\App\Support\Recruitment::NOTICE_PERIODS as $k => $label)
                            <option value="{{ $k }}" {{ (string) request('notice_period') === (string) $k ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn-primary-dash"><i class="fa fa-search"></i> Filter</button>
                    @if (request()->hasAny(['q','career_id','source','notice_period','stage_id','bucket','reason_id','apply_type','work_mode','candidate_interested','experience','mobile_verified','dup','exp_min','exp_max','ctc_min','ctc_max','cur_min','cur_max','join_by','from','to']))
                        <a href="{{ route('admin.career-applications.index') }}" class="btn-secondary-dash">Reset</a>
                    @endif

                    <details class="adv-filters" style="flex-basis:100%" {{ request()->hasAny(['reason_id','apply_type','work_mode','candidate_interested','experience','mobile_verified','dup','exp_min','exp_max','ctc_min','ctc_max','cur_min','cur_max','join_by','from','to']) ? 'open' : '' }}>
                        <summary>More filters</summary>
                        <div class="adv-grid">
                            <div><label>Reason</label>
                                <select name="reason_id" class="field-select">
                                    <option value="">Any</option>
                                    @foreach ($reasons as $r)
                                        <option value="{{ $r->id }}" {{ (string) request('reason_id') === (string) $r->id ? 'selected' : '' }}>{{ $r->title }}</option>
                                    @endforeach
                                </select></div>
                            <div><label>Job / Internship</label>
                                <select name="apply_type" class="field-select">
                                    <option value="">Both</option>
                                    @foreach (['Job','Internship'] as $t)
                                        <option value="{{ $t }}" {{ request('apply_type') === $t ? 'selected' : '' }}>{{ $t }}</option>
                                    @endforeach
                                </select></div>
                            <div><label>Work mode</label>
                                <select name="work_mode" class="field-select">
                                    <option value="">Any</option>
                                    @foreach (\App\Support\Recruitment::WORK_MODES as $m)
                                        <option value="{{ $m }}" {{ request('work_mode') === $m ? 'selected' : '' }}>{{ $m }}</option>
                                    @endforeach
                                </select></div>
                            <div><label>Candidate interested</label>
                                <select name="candidate_interested" class="field-select">
                                    <option value="">Any</option>
                                    @foreach (\App\Support\Recruitment::INTERESTED as $k => $l)
                                        <option value="{{ $k }}" {{ request('candidate_interested') === $k ? 'selected' : '' }}>{{ $l }}</option>
                                    @endforeach
                                </select></div>
                            <div><label>Experience band</label>
                                <select name="experience" class="field-select">
                                    <option value="">Any</option>
                                    @foreach (\App\Support\Recruitment::EXPERIENCE as $k => $l)
                                        <option value="{{ $k }}" {{ (string) request('experience') === (string) $k ? 'selected' : '' }}>{{ $l }}</option>
                                    @endforeach
                                </select></div>
                            <div><label>Mobile verified</label>
                                <select name="mobile_verified" class="field-select">
                                    <option value="">Any</option>
                                    <option value="1" {{ request('mobile_verified') === '1' ? 'selected' : '' }}>Verified</option>
                                    <option value="0" {{ request('mobile_verified') === '0' ? 'selected' : '' }}>Not verified</option>
                                </select></div>
                            <div><label>Total exp min (yrs)</label><input type="number" step="0.1" name="exp_min" value="{{ request('exp_min') }}" class="field-input"></div>
                            <div><label>Total exp max (yrs)</label><input type="number" step="0.1" name="exp_max" value="{{ request('exp_max') }}" class="field-input"></div>
                            <div><label>Expected CTC min (LPA)</label><input type="number" step="0.1" name="ctc_min" value="{{ request('ctc_min') }}" class="field-input"></div>
                            <div><label>Expected CTC max (LPA)</label><input type="number" step="0.1" name="ctc_max" value="{{ request('ctc_max') }}" class="field-input"></div>
                            <div><label>Current CTC min (LPA)</label><input type="number" step="0.1" name="cur_min" value="{{ request('cur_min') }}" class="field-input"></div>
                            <div><label>Current CTC max (LPA)</label><input type="number" step="0.1" name="cur_max" value="{{ request('cur_max') }}" class="field-input"></div>
                            <div><label>Can join by</label><input type="date" name="join_by" value="{{ request('join_by') }}" class="field-input"></div>
                            <div><label>Received from</label><input type="date" name="from" value="{{ request('from') }}" class="field-input"></div>
                            <div><label>Received to</label><input type="date" name="to" value="{{ request('to') }}" class="field-input"></div>
                            <div style="display:flex;align-items:flex-end">
                                <label style="display:flex;gap:6px;align-items:center;font-size:13px;color:#344054">
                                    <input type="checkbox" name="dup" value="1" {{ request()->boolean('dup') ? 'checked' : '' }}> Duplicates only
                                </label></div>
                        </div>
                    </details>
                </form>

                <div style="overflow-x:auto">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width:60px">ID</th>
                                <th>Candidate</th>
                                <th>Opening</th>
                                <th style="width:140px">Exp / Notice</th>
                                <th style="width:150px">CTC (LPA)</th>
                                <th style="width:120px">Received</th>
                                <th style="width:170px">Stage</th>
                                <th style="width:120px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($applications as $a)
                                <tr id="row{{ $a->id }}" class="{{ $a->stage?->bucket === 'new' ? 'is-new' : '' }}">
                                    <td><span class="id-chip">{{ $a->id }}</span></td>

                                    <td>
                                        <div class="row-title">
                                            <a href="{{ route('admin.career-applications.show', $a) }}">{{ $a->name }}</a>
                                            @if ($a->duplicate_of_id)
                                                <span class="mv-pill dup" title="Same candidate as #{{ $a->duplicate_of_id }}"><i class="fa fa-clone"></i> Duplicate of #{{ $a->duplicate_of_id }}</span>
                                            @endif
                                        </div>
                                        <div class="row-sub">{{ $a->email }}</div>
                                        <div class="row-sub">
                                            {{ $a->phone }}
                                            @if ($a->mobile_verified)
                                                <span class="mv-pill yes"><i class="fa fa-circle-check"></i> Verified</span>
                                            @else
                                                <span class="mv-pill no"><i class="fa fa-circle-exclamation"></i> Not verified</span>
                                            @endif
                                        </div>
                                    </td>

                                    <td>
                                        <div class="row-title">{{ $a->position }}</div>
                                        <div class="row-sub">
                                            <span class="pill pill-type">{{ $a->apply_type }}</span>
                                            · {{ \App\Support\Recruitment::SOURCES[$a->source] ?? $a->source }}
                                        </div>
                                    </td>

                                    <td>
                                        {{ $a->total_experience !== null ? $a->total_experience . ' yrs' : (\App\Support\Recruitment::EXPERIENCE[$a->experience] ?? ($a->experience ?: '—')) }}
                                        <div class="row-sub">Notice: {{ \App\Support\Recruitment::NOTICE_PERIODS[$a->notice_period] ?? ($a->notice_period ?: '—') }}</div>
                                    </td>

                                    <td style="white-space:nowrap">
                                        <div class="row-sub">Cur: {{ $a->current_ctc ?? '—' }}</div>
                                        <div class="row-sub">Exp: {{ $a->expected_ctc ?? '—' }}</div>
                                        <div class="row-sub">Off: {{ $a->offered_ctc ?? '—' }}</div>
                                    </td>

                                    <td style="white-space:nowrap">
                                        {{ $a->created_at->format('d M Y') }}
                                        <div class="row-sub">{{ $a->created_at->format('h:i A') }}</div>
                                    </td>

                                    <td>
                                        <span class="stage-pill b-{{ $a->stage?->bucket ?? 'new' }}">{{ $a->stage?->title ?? 'New Application' }}</span>
                                        @if ($a->reason)
                                            <div class="row-sub">{{ $a->reason->title }}</div>
                                        @endif
                                    </td>

                                    <td>
                                        <div style="display:flex;gap:6px">
                                            <a href="{{ route('admin.career-applications.show', $a) }}" class="action-btn view" title="View"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('admin.career-applications.edit', $a) }}" class="action-btn view" title="Edit"><i class="fa fa-pen"></i></a>
                                            <a href="{{ route('admin.career-applications.resume', $a) }}" class="action-btn view" title="Download Resume"><i class="fa fa-download"></i></a>
                                            <button type="button" class="action-btn danger" title="Delete" onclick="deleteApplication({{ $a->id }})"><i class="fa fa-trash"></i></button>
                                            <form id="del{{ $a->id }}" method="POST" style="display:none" action="{{ route('admin.career-applications.destroy', $a) }}">
                                                @csrf @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">
                                        <div class="empty-state">
                                            <div class="empty-icon-wrap"><i class="fa fa-briefcase"></i></div>
                                            <h6>No Candidates Found</h6>
                                            <p>Applications from the website, and CVs you add manually, will show up here.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($applications->hasPages())
                    <div class="pagination-bar">{{ $applications->links('pagination::bootstrap-4') }}</div>
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
        icon: 'warning', showCancelButton: true, confirmButtonColor: '#d33', confirmButtonText: 'Yes, Delete'
    }).then((result) => { if (result.isConfirmed) { document.getElementById('del' + id).submit(); } });
}
</script>
