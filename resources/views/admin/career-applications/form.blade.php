{{-- Destination: resources/views/admin/career-applications/form.blade.php (Add + Edit candidate) --}}
@php
    $isEdit = $application->exists;
    $v = fn($f, $default = null) => old($f, $application->{$f} ?? $default);
    $currentCareerId = old('career_id', $application->career_id);
    $positionOther = old('position_other', ($isEdit && !$application->career_id) ? $application->position : '');
@endphp
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <div class="app-content content container-fluid">
        <div class="edit-page">

            <div class="edit-page-header">
                <div>
                    <h1>{{ $isEdit ? 'Edit Candidate' : 'Add Candidate' }}</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a><span>›</span>
                        <a href="{{ route('admin.career-applications.index') }}">Recruitment</a><span>›</span>
                        {{ $isEdit ? 'Edit' : 'Add' }}
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="form-errors">
                    <ul>
                        @foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach
                    </ul>
                    @if (session('duplicate_id'))
                        <a href="{{ route('admin.career-applications.show', session('duplicate_id')) }}" target="_blank">Open existing profile →</a>
                    @endif
                </div>
            @endif

            <form method="POST" enctype="multipart/form-data"
                  action="{{ $isEdit ? route('admin.career-applications.update', $application) : route('admin.career-applications.store') }}">
                @csrf
                @if ($isEdit) @method('PUT') @endif

                <div class="edit-layout">
                    <!-- LEFT -->
                    <div>
                        <div class="section-card">
                            <div class="section-card-header"><h5>Candidate</h5></div>
                            <div class="section-card-body">
                                <div class="field-group"><label class="field-label">Full name *</label>
                                    <input class="field-input" name="name" value="{{ $v('name') }}" required></div>
                                <div class="field-group"><label class="field-label">Email *</label>
                                    <input class="field-input" type="email" name="email" value="{{ $v('email') }}" required></div>
                                <div class="field-group"><label class="field-label">Mobile *</label>
                                    <input class="field-input" name="phone" value="{{ $v('phone') }}" inputmode="numeric" required></div>
                                <div class="field-group"><label class="field-label">Current location</label>
                                    <input class="field-input" name="location" value="{{ $v('location') }}"></div>
                                <div class="field-group"><label class="field-label">Portfolio / Website</label>
                                    <input class="field-input" type="url" name="portfolio" value="{{ $v('portfolio') }}"></div>
                                <div class="field-group"><label class="field-label">LinkedIn</label>
                                    <input class="field-input" type="url" name="linkedin" value="{{ $v('linkedin') }}"></div>
                                <div class="field-group">
                                    <label class="field-label">Resume / CV {{ $isEdit ? '(upload only to replace)' : '*' }}</label>
                                    <input class="field-input" type="file" name="resume" accept=".pdf,.doc,.docx" {{ $isEdit ? '' : 'required' }}>
                                    <small style="color:#667085">PDF, DOC or DOCX · Max 5MB</small>
                                </div>
                                <div class="field-group"><label class="field-label">Cover letter / notes from candidate</label>
                                    <textarea class="field-input" name="cover_letter" rows="3">{{ $v('cover_letter') }}</textarea></div>
                            </div>
                        </div>

                        <div class="section-card">
                            <div class="section-card-header"><h5>Interest &amp; Commercials</h5></div>
                            <div class="section-card-body">
                                <div class="field-group"><label class="field-label">Candidate interested</label>
                                    <select class="field-select" name="candidate_interested">
                                        @foreach (\App\Support\Recruitment::INTERESTED as $k => $l)
                                            <option value="{{ $k }}" {{ $v('candidate_interested', 'pending') === $k ? 'selected' : '' }}>{{ $l }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="field-group"><label class="field-label">Work mode</label>
                                    <select class="field-select" name="work_mode">
                                        <option value="">—</option>
                                        @foreach (\App\Support\Recruitment::WORK_MODES as $m)
                                            <option value="{{ $m }}" {{ $v('work_mode') === $m ? 'selected' : '' }}>{{ $m }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="field-group"><label class="field-label">Notice period</label>
                                    <select class="field-select" name="notice_period">
                                        <option value="">—</option>
                                        @foreach (\App\Support\Recruitment::NOTICE_PERIODS as $k => $l)
                                            <option value="{{ $k }}" {{ (string) $v('notice_period') === (string) $k ? 'selected' : '' }}>{{ $l }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="field-group"><label class="field-label">Available to join from</label>
                                    <input class="field-input" type="date" name="available_from" value="{{ old('available_from', $application->available_from?->format('Y-m-d')) }}"></div>
                                <div class="field-group"><label class="field-label">Total experience (years)</label>
                                    <input class="field-input" type="number" step="0.1" min="0" name="total_experience" value="{{ $v('total_experience') }}"></div>
                                <div class="field-group"><label class="field-label">Relevant experience (years)</label>
                                    <input class="field-input" type="number" step="0.1" min="0" name="relevant_experience" value="{{ $v('relevant_experience') }}"></div>
                                <div class="field-group"><label class="field-label">Current CTC (LPA)</label>
                                    <input class="field-input" type="number" step="0.01" min="0" name="current_ctc" value="{{ $v('current_ctc') }}"></div>
                                <div class="field-group"><label class="field-label">Expected CTC (LPA)</label>
                                    <input class="field-input" type="number" step="0.01" min="0" name="expected_ctc" value="{{ $v('expected_ctc') }}"></div>
                                <div class="field-group"><label class="field-label">Company budget / Offered CTC (LPA)</label>
                                    <input class="field-input" type="number" step="0.01" min="0" name="offered_ctc" value="{{ $v('offered_ctc') }}"></div>
                            </div>
                        </div>
                    </div>

                    <!-- RIGHT -->
                    <div>
                        <div class="section-card">
                            <div class="section-card-header"><h5>Opening</h5></div>
                            <div class="section-card-body">
                                <div class="field-group"><label class="field-label">Applying for</label>
                                    <select class="field-select" name="apply_type">
                                        @foreach (['Job','Internship'] as $t)
                                            <option value="{{ $t }}" {{ $v('apply_type', 'Job') === $t ? 'selected' : '' }}>{{ $t }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="field-group"><label class="field-label">Opening</label>
                                    <select class="field-select" name="career_id" id="careerSelect">
                                        <option value="">Other (type below)</option>
                                        @foreach ($careers as $c)
                                            <option value="{{ $c->id }}" {{ (string) $currentCareerId === (string) $c->id ? 'selected' : '' }}>{{ $c->title }}</option>
                                        @endforeach
                                    </select></div>
                                <div class="field-group" id="positionOtherWrap">
                                    <label class="field-label">Position (if not in the list)</label>
                                    <input class="field-input" name="position_other" value="{{ $positionOther }}"></div>
                                <div class="field-group"><label class="field-label">CV source</label>
                                    <select class="field-select" name="source">
                                        @foreach (\App\Support\Recruitment::SOURCES as $k => $l)
                                            <option value="{{ $k }}" {{ $v('source', 'email') === $k ? 'selected' : '' }}>{{ $l }}</option>
                                        @endforeach
                                    </select></div>
                            </div>
                        </div>

                        <div class="section-card">
                            <div class="section-card-header"><h5>Stage</h5></div>
                            <div class="section-card-body">
                                <div class="field-group"><label class="field-label">Candidate stage *</label>
                                    <select class="field-select" name="stage_id" id="stageSelect" required>
                                        @foreach ($stages as $s)
                                            <option value="{{ $s->id }}" data-bucket="{{ $s->bucket }}"
                                                {{ (string) $v('stage_id', $stages->first()?->id) === (string) $s->id ? 'selected' : '' }}>{{ $s->title }}</option>
                                        @endforeach
                                    </select></div>
                                <div id="reasonWrap">
                                    <div class="field-group"><label class="field-label">Reason (Shortlisted / Closed)</label>
                                        <select class="field-select" name="reason_id" id="reasonSelect">
                                            <option value="">—</option>
                                            @foreach ($reasons as $r)
                                                <option value="{{ $r->id }}" data-title="{{ $r->title }}" {{ (string) $v('reason_id') === (string) $r->id ? 'selected' : '' }}>{{ $r->title }}</option>
                                            @endforeach
                                        </select></div>
                                    <div class="field-group"><label class="field-label">Reason remarks (required for "Other")</label>
                                        <textarea class="field-input" name="reason_remarks" rows="2">{{ $v('reason_remarks') }}</textarea></div>
                                </div>
                                <div class="field-group"><label class="field-label">Recruiter remarks</label>
                                    <textarea class="field-input" name="recruiter_remarks" rows="4">{{ $v('recruiter_remarks') }}</textarea></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-card" style="margin-top:20px;margin-bottom:0">
                    <div class="section-card-body" style="display:flex;justify-content:flex-end;gap:10px;padding:14px 20px">
                        <a href="{{ $isEdit ? route('admin.career-applications.show', $application) : route('admin.career-applications.index') }}" class="btn-secondary-dash">Cancel</a>
                        <button type="submit" class="btn-primary-dash"><i class="fa fa-save"></i> {{ $isEdit ? 'Save Changes' : 'Add Candidate' }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@include('admin.footer')

<script>
(function () {
    var stage = document.getElementById('stageSelect');
    var reasonWrap = document.getElementById('reasonWrap');
    var career = document.getElementById('careerSelect');
    var other = document.getElementById('positionOtherWrap');

    function syncStage() {
        var bucket = stage.options[stage.selectedIndex].getAttribute('data-bucket');
        // always show if a reason is already chosen; otherwise only for Shortlisted / Closed
        var need = bucket === 'shortlisted' || bucket === 'closed';
        reasonWrap.style.display = (need || document.getElementById('reasonSelect').value) ? '' : 'none';
    }
    function syncCareer() { other.style.display = career.value ? 'none' : ''; }

    stage.addEventListener('change', syncStage);
    career.addEventListener('change', syncCareer);
    syncStage(); syncCareer();
})();
</script>
