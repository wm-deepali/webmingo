@include('admin.top-header')

<div class="main-section">
    @include('admin.header')

    @include('admin.careers._styles')

    <div class="app-content content container-fluid">
        <div class="list-page">

            <!-- Page header -->
            <div class="page-header">
                <div>
                    <h1>Manage Careers</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        Manage Careers
                    </div>
                </div>
                <a href="{{ route('admin.careers.create') }}" class="btn-primary-dash">
                    <i class="fa fa-plus"></i> Add Career
                </a>
            </div>

            @if (session('success'))
                <div class="flash-success">{{ session('success') }}</div>
            @endif

            <!-- Main card -->
            <div class="list-card">
                <div style="overflow-x:auto">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width:60px">ID</th>
                                <th>Position</th>
                                <th style="width:150px">Department</th>
                                <th style="width:120px">Type</th>
                                <th style="width:90px">Order</th>
                                <th style="width:110px">Status</th>
                                <th style="width:90px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($careers as $career)
                                <tr id="row{{ $career->id }}">

                                    <td><span class="id-chip">{{ $career->id }}</span></td>

                                    <td>
                                        <div class="row-title">{{ $career->title }}</div>
                                        <div class="row-sub">
                                            {{ $career->employment_type }}
                                            @if ($career->work_mode) · {{ $career->work_mode }} @endif
                                            @if ($career->location) · {{ $career->location }} @endif
                                        </div>
                                    </td>

                                    <td>{{ $career->department }}</td>

                                    <td><span class="pill pill-type">{{ $career->type }}</span></td>

                                    <td>{{ $career->sort_order }}</td>

                                    <td>
                                        @if ($career->status)
                                            <span class="pill pill-active">Active</span>
                                        @else
                                            <span class="pill pill-inactive">Inactive</span>
                                        @endif
                                    </td>

                                    <td>
                                        <div style="display:flex;gap:6px">
                                            <a href="{{ route('admin.careers.edit', $career->id) }}"
                                               class="action-btn edit" title="Edit">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <button class="action-btn danger" title="Delete"
                                                    onclick="deleteCareer({{ $career->id }})">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">
                                        <div class="empty-state">
                                            <div class="empty-icon-wrap">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <h6>No Careers Found</h6>
                                            <p>Add your first job opening to show it on the careers page.</p>
                                            <a href="{{ route('admin.careers.create') }}" class="btn-primary-dash">
                                                <i class="fa fa-plus"></i> Add Career
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>

                @if ($careers->hasPages())
                    <div class="pagination-bar">
                        {{ $careers->links('pagination::bootstrap-4') }}
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>

@include('admin.footer')

<script>
function deleteCareer(id) {
    Swal.fire({
        title: 'Delete Career?',
        text: 'This action cannot be undone.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Yes, Delete'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "{{ url('admin/careers') }}/" + id,
                type: "DELETE",
                data: { _token: "{{ csrf_token() }}" },
                success: function (res) {
                    Swal.fire('Deleted!', res.message, 'success');
                    $("#row" + id).fadeOut(400, function () { $(this).remove(); });
                },
                error: function () {
                    Swal.fire('Error!', 'Something went wrong. Please try again.', 'error');
                }
            });
        }
    });
}
</script>