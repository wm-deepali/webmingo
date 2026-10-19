@php
    $career = $career ?? new \App\Models\Career([
        'type'            => 'Job',
        'employment_type' => 'Full-time',
        'status'          => 1,
        'sort_order'      => 0,
    ]);
    $isEdit = $career->exists;
@endphp

<div class="create-layout">

    <!-- ── LEFT column ── -->
    <div>

        <!-- Job Details -->
        <div class="section-card">
            <div class="section-card-header"><h5>Job Details</h5></div>
            <div class="section-card-body">

                <div class="field-group">
                    <label class="field-label">Job Title <span class="req">*</span></label>
                    <input type="text" name="title" id="title" class="field-input"
                           value="{{ old('title', $career->title) }}" required>
                </div>

                <div class="field-group">
                    <label class="field-label">Slug</label>
                    <div class="slug-wrap">
                        <span class="slug-prefix">career/</span>
                        <input type="text" name="slug" id="slug" class="field-input"
                               value="{{ old('slug', $career->slug) }}">
                    </div>
                    <div class="field-hint">
                        {{ $isEdit ? 'Changing the slug changes the job URL.' : 'Auto-generated from title. You can edit manually.' }}
                    </div>
                </div>

                <div class="field-row">
                    <div class="field-group">
                        <label class="field-label">Department <span class="req">*</span></label>
                        <input type="text" name="department" class="field-input" list="departmentList"
                               value="{{ old('department', $career->department) }}"
                               placeholder="e.g. Development" required>
                        <datalist id="departmentList">
                            <option value="Development">
                            <option value="Design">
                            <option value="Marketing">
                            <option value="Business Development">
                        </datalist>
                        <div class="field-hint">Used for the department filter on the careers page.</div>
                    </div>

                    <div class="field-group">
                        <label class="field-label">Applying As <span class="req">*</span></label>
                        <select name="type" class="field-input" required>
                            @foreach (['Job', 'Internship'] as $opt)
                                <option value="{{ $opt }}" @selected(old('type', $career->type) === $opt)>{{ $opt }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="field-row">
                    <div class="field-group">
                        <label class="field-label">Employment Type <span class="req">*</span></label>
                        <select name="employment_type" class="field-input" required>
                            @foreach (['Full-time', 'Part-time', 'Contract'] as $opt)
                                <option value="{{ $opt }}" @selected(old('employment_type', $career->employment_type) === $opt)>{{ $opt }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="field-group">
                        <label class="field-label">Work Mode</label>
                        <select name="work_mode" class="field-input">
                            <option value="">Select</option>
                            @foreach (['Onsite', 'Remote', 'Hybrid'] as $opt)
                                <option value="{{ $opt }}" @selected(old('work_mode', $career->work_mode) === $opt)>{{ $opt }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="field-row">
                    <div class="field-group">
                        <label class="field-label">Location</label>
                        <input type="text" name="location" class="field-input"
                               value="{{ old('location', $career->location) }}"
                               placeholder="City, Country">
                    </div>

                    <div class="field-group">
                        <label class="field-label">Experience</label>
                        <input type="text" name="experience" class="field-input"
                               value="{{ old('experience', $career->experience) }}"
                               placeholder="e.g. 3–5 Years">
                    </div>
                </div>

                <div class="field-group">
                    <label class="field-label">Salary</label>
                    <input type="text" name="salary" class="field-input"
                           value="{{ old('salary', $career->salary) }}"
                           placeholder="e.g. ₹4 LPA – ₹8 LPA">
                    <div class="field-hint">Leave empty to hide salary on the job page.</div>
                </div>

                <div class="field-group">
                    <label class="field-label">Short Description</label>
                    <textarea name="short_description" class="field-textarea" rows="3"
                              placeholder="One or two lines shown on the job card in the listing…">{{ old('short_description', $career->short_description) }}</textarea>
                </div>

            </div>
        </div>

        <!-- The Role -->
        <div class="section-card">
            <div class="section-card-header"><h5>The Role (Intro)</h5></div>
            <div class="section-card-body">
                <div class="field-group">
                    <textarea name="description" id="description" class="field-textarea" rows="8"
                              placeholder="Introduce the role…">{{ old('description', $career->description) }}</textarea>
                </div>
            </div>
        </div>

        <!-- Lists -->
        <div class="section-card">
            <div class="section-card-header"><h5>Role Details</h5></div>
            <div class="section-card-body">

                <div class="field-group">
                    <label class="field-label">What You’ll Do (Responsibilities)</label>
                    <textarea name="responsibilities" class="field-textarea" rows="6"
                              placeholder="One item per line">{{ old('responsibilities', $career->responsibilities) }}</textarea>
                    <div class="field-hint">Write one point per line. Each line becomes a list item.</div>
                </div>

                <div class="field-group">
                    <label class="field-label">What We’re Looking For (Requirements)</label>
                    <textarea name="requirements" class="field-textarea" rows="6"
                              placeholder="One item per line">{{ old('requirements', $career->requirements) }}</textarea>
                </div>

                <div class="field-group">
                    <label class="field-label">Skills That Set You Apart (Nice to Have)</label>
                    <textarea name="nice_to_have" class="field-textarea" rows="5"
                              placeholder="One item per line">{{ old('nice_to_have', $career->nice_to_have) }}</textarea>
                </div>

            </div>
        </div>

    </div>

    <!-- ── RIGHT column ── -->
    <div>

        <!-- SEO -->
        <div class="section-card">
            <div class="section-card-header"><h5>SEO Settings</h5></div>
            <div class="section-card-body">

                <div class="field-group">
                    <label class="field-label">Meta Title</label>
                    <input type="text" name="meta_title" class="field-input"
                           value="{{ old('meta_title', $career->meta_title) }}"
                           placeholder="Enter meta title">
                </div>

                <div class="field-group">
                    <label class="field-label">Meta Description</label>
                    <textarea name="meta_description" class="field-textarea" rows="4"
                              placeholder="Enter meta description">{{ old('meta_description', $career->meta_description) }}</textarea>
                </div>

            </div>
        </div>

        <!-- Settings -->
        <div class="section-card">
            <div class="section-card-header"><h5>Settings</h5></div>
            <div class="section-card-body" style="padding:16px 20px">

                <div class="toggle-row">
                    <div>
                        <div class="toggle-label">Status</div>
                        <div class="toggle-sub">Show this opening on the website</div>
                    </div>
                    <label class="toggle-switch">
                        <input type="checkbox" name="status" id="status"
                               {{ old('_token') ? (old('status') ? 'checked' : '') : ($career->status ? 'checked' : '') }}>
                        <span class="toggle-track"></span>
                    </label>
                </div>

                <div class="field-group" style="margin-top:14px">
                    <label class="field-label">Sort Order</label>
                    <input type="number" min="0" name="sort_order" class="field-input"
                           value="{{ old('sort_order', $career->sort_order ?? 0) }}">
                    <div class="field-hint">Lower numbers appear first.</div>
                </div>

            </div>
        </div>

    </div>
</div>

<!-- Action bar -->
<div class="action-bar">
    <a href="{{ route('admin.careers.index') }}" class="btn-secondary-dash">Cancel</a>
    <button type="submit" id="saveBtn" class="btn-primary-dash">
        <i class="fa-solid fa-save"></i> {{ $isEdit ? 'Update Career' : 'Save Career' }}
    </button>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
// Rich text editor for the role intro
CKEDITOR.replace('description', { height: 260 });

// Slug auto-generate from title (only while creating, and until slug is edited by hand)
@if (! $isEdit)
(function () {
    var slugEdited = false;
    var slugInput  = document.getElementById('slug');

    slugInput.addEventListener('input', function () { slugEdited = this.value.length > 0; });

    document.getElementById('title').addEventListener('keyup', function () {
        if (slugEdited) return;
        slugInput.value = this.value
            .toLowerCase()
            .trim()
            .replace(/\s+/g, '-')
            .replace(/[^\w-]+/g, '');
    });
})();
@endif

// Submit spinner
document.getElementById('careerForm').addEventListener('submit', function () {
    var btn = document.getElementById('saveBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Saving...';
});
</script>s