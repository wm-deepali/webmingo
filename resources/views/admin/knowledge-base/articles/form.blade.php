{{-- resources/views/admin/knowledge-base/articles/form.blade.php (used for both create and edit) --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.careers._styles')

    <div class="app-content content container-fluid">
        <div class="create-page">

            <div class="page-header">
                <div>
                    <h1>{{ $article->exists ? 'Edit Article' : 'Add Article' }}</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        <a href="{{ route('admin.kb-articles.index') }}">Knowledge Base Articles</a>
                        <span>›</span>
                        {{ $article->exists ? 'Edit' : 'Add' }}
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

            <form id="articleForm" method="POST"
                  action="{{ $article->exists ? route('admin.kb-articles.update', $article) : route('admin.kb-articles.store') }}">
                @csrf
                @if ($article->exists)
                    @method('PUT')
                @endif

                <div class="create-layout">

                    <!-- LEFT -->
                    <div>

                        <div class="section-card">
                            <div class="section-card-header"><h5>Article</h5></div>
                            <div class="section-card-body">

                                <div class="field-group">
                                    <label class="field-label">Question / Title</label>
                                    <input type="text" name="title" class="field-input"
                                           value="{{ old('title', $article->title) }}"
                                           placeholder="e.g. Why Is My Website Loading Slowly?" required>
                                </div>

                                <div class="field-group">
                                    <label class="field-label">Short Description (shown before Read More)</label>
                                    <textarea name="short_description" class="field-textarea" rows="4" required
                                              placeholder="Short summary shown on the card">{{ old('short_description', $article->short_description) }}</textarea>
                                </div>

                                <div class="field-group">
                                    <label class="field-label">Answer (shown after Read More)</label>
                                    <textarea name="content" id="content" class="field-textarea">{{ old('content', $article->content) }}</textarea>
                                    <div class="field-hint">
                                        Use the Format dropdown: <strong>Heading 5</strong> for section titles
                                        (The Problem, What You Can Do...), <strong>Normal</strong> for paragraphs, and the bullet list button for lists.
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="section-card">
                            <div class="section-card-header"><h5>Call To Action (optional)</h5></div>
                            <div class="section-card-body">

                                <div class="field-group">
                                    <label class="field-label">CTA Text</label>
                                    <input type="text" name="cta_text" class="field-input"
                                           value="{{ old('cta_text', $article->cta_text) }}"
                                           placeholder="e.g. Need help diagnosing a slow website?">
                                </div>

                                <div class="field-group">
                                    <label class="field-label">CTA Button Text</label>
                                    <input type="text" name="cta_button_text" class="field-input"
                                           value="{{ old('cta_button_text', $article->cta_button_text) }}"
                                           placeholder="Talk To Us">
                                </div>

                                <div class="field-hint">Leave CTA Text empty to hide the CTA block for this article.</div>
                            </div>
                        </div>

                    </div>

                    <!-- RIGHT -->
                    <div>
                        <div class="section-card">
                            <div class="section-card-header"><h5>Settings</h5></div>
                            <div class="section-card-body">

                                <div class="field-group">
                                    <label class="field-label">Category</label>
                                    <select name="category_id" class="field-input" required>
                                        <option value="">Select category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @selected(old('category_id', $article->category_id) == $category->id)>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="field-group">
                                    <label class="field-label">Sort Order</label>
                                    <input type="number" name="sort_order" class="field-input" min="0"
                                           value="{{ old('sort_order', $article->sort_order ?? 0) }}">
                                </div>

                                <div class="field-group">
                                    <label class="field-label">Status</label>
                                    <select name="status" class="field-input">
                                        <option value="1" @selected(old('status', $article->status ?? 1) == 1)>Active</option>
                                        <option value="0" @selected(old('status', $article->status ?? 1) == 0)>Inactive</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                <div class="action-bar">
                    <a href="{{ route('admin.kb-articles.index') }}" class="btn-secondary-dash">Cancel</a>
                    <button type="submit" id="saveBtn" class="btn-primary-dash">
                        <i class="fa-solid fa-save"></i> Save Article
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

@include('admin.footer')

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
<script>
CKEDITOR.replace('content', {
    height: 420,
    format_tags: 'p;h5',
    removePlugins: 'elementspath',
    resize_enabled: false
});

document.getElementById('articleForm').addEventListener('submit', function () {
    var btn = document.getElementById('saveBtn');
    btn.disabled = true;
    btn.innerHTML = '<i class="fa fa-spinner fa-spin"></i> Saving...';
});
</script>