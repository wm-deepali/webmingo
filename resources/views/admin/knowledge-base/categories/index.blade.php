{{-- resources/views/admin/knowledge-base/categories/index.blade.php --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.careers._styles')

    <div class="app-content content container-fluid">
        <div class="create-page">

            <div class="page-header">
                <div>
                    <h1>Knowledge Base Categories</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        Knowledge Base Categories
                    </div>
                </div>
                <a href="{{ route('admin.kb-articles.index') }}" class="btn-secondary-dash">
                    <i class="fa fa-list"></i> Articles
                </a>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
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

            <div class="create-layout">

                <!-- LEFT: LIST -->
                <div>
                    <div class="section-card">
                        <div class="section-card-header"><h5>All Categories</h5></div>
                        <div class="section-card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Tab Key</th>
                                        <th>Articles</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($categories as $category)
                                        <tr>
                                            <td><div class="row-title">{{ $category->name }}</div></td>
                                            <td><span class="id-chip">{{ $category->slug }}</span></td>
                                            <td>{{ $category->articles_count }}</td>
                                            <td>{{ $category->sort_order }}</td>
                                            <td>{{ $category->status ? 'Active' : 'Inactive' }}</td>
                                            <td style="white-space:nowrap">
                                                <a href="{{ route('admin.kb-categories.index', ['edit' => $category->id]) }}"
                                                   class="btn-secondary-dash"><i class="fa fa-pen"></i></a>

                                                <form method="POST"
                                                      action="{{ route('admin.kb-categories.destroy', $category) }}"
                                                      class="js-delete-form" style="display:inline"
                                                      data-text="This will also delete all {{ $category->articles_count }} article(s) in this category.">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn-secondary-dash" style="color:var(--red) !important">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="6">No categories yet.</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: ADD / EDIT -->
                <div>
                    <div class="section-card">
                        <div class="section-card-header">
                            <h5>{{ $editing ? 'Edit Category' : 'Add Category' }}</h5>
                        </div>
                        <div class="section-card-body">
                            <form method="POST"
                                  action="{{ $editing ? route('admin.kb-categories.update', $editing) : route('admin.kb-categories.store') }}">
                                @csrf
                                @if ($editing)
                                    @method('PUT')
                                @endif

                                <div class="field-group">
                                    <label class="field-label">Name</label>
                                    <input type="text" name="name" class="field-input"
                                           value="{{ old('name', $editing->name ?? '') }}"
                                           placeholder="e.g. Websites" required>
                                </div>

                                <div class="field-row">
                                    <div class="field-group">
                                        <label class="field-label">Sort Order</label>
                                        <input type="number" name="sort_order" class="field-input" min="0"
                                               value="{{ old('sort_order', $editing->sort_order ?? 0) }}">
                                    </div>
                                    <div class="field-group">
                                        <label class="field-label">Status</label>
                                        <select name="status" class="field-input">
                                            <option value="1" @selected(old('status', $editing->status ?? 1) == 1)>Active</option>
                                            <option value="0" @selected(old('status', $editing->status ?? 1) == 0)>Inactive</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="field-hint">The tab key is generated from the name and does not change after creation.</div>

                                <p style="margin:14px 0 0">
                                    <button type="submit" class="btn-primary-dash">
                                        <i class="fa-solid fa-save"></i> {{ $editing ? 'Update' : 'Save' }}
                                    </button>
                                    @if ($editing)
                                        <a href="{{ route('admin.kb-categories.index') }}" class="btn-secondary-dash">Cancel</a>
                                    @endif
                                </p>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('admin.footer')

<script>
document.querySelectorAll('.js-delete-form').forEach(function (form) {
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        Swal.fire({
            title: 'Delete this category?',
            text: form.dataset.text || '',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Yes, delete'
        }).then(function (result) {
            if (result.isConfirmed) form.submit();
        });
    });
});
</script>