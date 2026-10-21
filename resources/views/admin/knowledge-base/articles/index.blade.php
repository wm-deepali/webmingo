{{-- resources/views/admin/knowledge-base/articles/index.blade.php --}}
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.careers._styles')

    <div class="app-content content container-fluid">
        <div class="create-page">

            <div class="page-header">
                <div>
                    <h1>Knowledge Base Articles</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        Knowledge Base Articles
                    </div>
                </div>
                <div>
                    <a href="{{ route('admin.kb-categories.index') }}" class="btn-secondary-dash">
                        <i class="fa fa-tags"></i> Categories
                    </a>
                    <a href="{{ route('admin.kb-articles.create') }}" class="btn-primary-dash">
                        <i class="fa fa-plus"></i> Add Article
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="section-card">
                <div class="section-card-header">
                    <h5>All Articles</h5>
                    <form method="GET" style="margin-left:auto">
                        <select name="category_id" class="field-input" onchange="this.form.submit()">
                            <option value="">All categories</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(request('category_id') == $category->id)>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="section-card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Order</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($articles as $article)
                                <tr>
                                    <td><div class="row-title">{{ $article->title }}</div></td>
                                    <td>{{ $article->category->name ?? '-' }}</td>
                                    <td>{{ $article->sort_order }}</td>
                                    <td>{{ $article->status ? 'Active' : 'Inactive' }}</td>
                                    <td style="white-space:nowrap">
                                        <a href="{{ route('admin.kb-articles.edit', $article) }}"
                                           class="btn-secondary-dash"><i class="fa fa-pen"></i></a>

                                        <form method="POST" action="{{ route('admin.kb-articles.destroy', $article) }}"
                                              class="js-delete-form" style="display:inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-secondary-dash" style="color:var(--red) !important">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr><td colspan="5">No articles yet.</td></tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div style="margin-top:14px">{{ $articles->links() }}</div>
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
            title: 'Delete this article?',
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