@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.careers._styles')

    <div class="app-content content container-fluid">
        <div class="create-page">

            <!-- Page header -->
            <div class="page-header">
                <div>
                    <h1>Edit Hero — {{ $label }}</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        <a href="{{ route('admin.page-heroes.index') }}">Page Hero Sections</a>
                        <span>›</span>
                        {{ $label }}
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="form-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="heroForm" method="POST" action="{{ route('admin.page-heroes.update', $pageKey) }}">
                @csrf
                @method('PUT')

                <div class="create-layout">

                    <!-- LEFT -->
                    <div>

                        <div class="section-card">
                            <div class="section-card-header"><h5>Hero Text</h5></div>
                            <div class="section-card-body">

                                <div class="field-group">
                                    <label class="field-label">Small Label (above heading)</label>
                                    <input type="text" name="eyebrow" class="field-input"
                                           value="{{ old('eyebrow', $hero->eyebrow) }}"
                                           placeholder="e.g. WEB MINGO BLOG">
                                </div>

                                <div class="field-group">
                                    <label class="field-label">Heading (H1)</label>
                                    <input type="text" name="heading" class="field-input"
                                           value="{{ old('heading', $hero->heading) }}"
                                           placeholder="Main heading of the page">
                                </div>

                                <div class="field-group">
                                    <label class="field-label">Description</label>
                                    <textarea name="description" class="field-textarea" rows="4"
                                              placeholder="Short text under the heading">{{ old('description', $hero->description) }}</textarea>
                                </div>

                                <div class="field-hint">Leave a field empty to use the page's default text.</div>
                            </div>
                        </div>

                        <div class="section-card">
                            <div class="section-card-header"><h5>Buttons</h5></div>
                            <div class="section-card-body">

                                <div class="field-row">
                                    <div class="field-group">
                                        <label class="field-label">Primary Button Text</label>
                                        <input type="text" name="primary_text" class="field-input"
                                               value="{{ old('primary_text', $hero->primary_text) }}"
                                               placeholder="e.g. Explore Latest Articles">
                                    </div>
                                    <div class="field-group">
                                        <label class="field-label">Primary Button Link</label>
                                        <input type="text" name="primary_url" class="field-input"
                                               value="{{ old('primary_url', $hero->primary_url) }}"
                                               placeholder="#section, /page, https://...">
                                    </div>
                                </div>

                                <div class="field-row">
                                    <div class="field-group">
                                        <label class="field-label">Secondary Button Text</label>
                                        <input type="text" name="secondary_text" class="field-input"
                                               value="{{ old('secondary_text', $hero->secondary_text) }}"
                                               placeholder="e.g. Send Your Requirement">
                                    </div>
                                    <div class="field-group">
                                        <label class="field-label">Secondary Button Link</label>
                                        <input type="text" name="secondary_url" class="field-input"
                                               value="{{ old('secondary_url', $hero->secondary_url) }}"
                                               placeholder="#enquire to open the popup">
                                    </div>
                                </div>

                                <div class="field-hint">
                                    Links can start with <code>#</code>, <code>/</code>, <code>https://</code>, <code>tel:</code> or <code>mailto:</code>.
                                    Use <code>#enquire</code> to open the enquiry popup.
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT -->
                    <div>
                        <div class="section-card">
                            <div class="section-card-header"><h5>Page</h5></div>
                            <div class="section-card-body">
                                <div class="row-title">{{ $label }}</div>
                                <div class="row-sub"><span class="id-chip">{{ $pageKey }}</span></div>

                                @if (Route::has($pageKey))
                                    <p style="margin:14px 0 0">
                                        <a href="{{ route($pageKey) }}" target="_blank" rel="noopener"
                                           class="btn-secondary-dash">
                                            <i class="fa fa-arrow-up-right-from-square"></i> View page
                                        </a>
                                    </p>
                                @endif

                                <div class="field-hint" style="margin-top:14px">
                                    The background video of the hero section is fixed and cannot be changed here.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Action bar -->
                <div class="action-bar">
                    @if ($hero->exists)
                        <button type="submit" form="resetForm" class="btn-secondary-dash"
                                style="margin-right:auto;color:var(--red) !important"
                                onclick="return confirm('Reset this hero section to its default text?');">
                            <i class="fa fa-rotate-left"></i> Reset to Default
                        </button>
                    @endif

                    <a href="{{ route('admin.page-heroes.index') }}" class="btn-secondary-dash">Cancel</a>
                    <button type="submit" id="saveBtn" class="btn-primary-dash">
                        <i class="fa-solid fa-save"></i> Save Hero
                    </button>
                </div>

            </form>

            @if ($hero->exists)
                <form id="resetForm" method="POST" action="{{ route('admin.page-heroes.destroy', $pageKey) }}" style="display:none">
                    @csrf
                    @method('DELETE')
                </form>
            @endif

        </div>
    </div>
</div>

@include('admin.footer')

<script>
document.getElementById('heroForm').addEventListener('submit', function () {
    var btn = document.getElementById('saveBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Saving...';
});
</script>