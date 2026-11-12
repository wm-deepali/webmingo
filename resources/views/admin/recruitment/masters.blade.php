{{-- Destination: resources/views/admin/recruitment/masters.blade.php (Stages + Reasons CRUD) --}}
@php $isStage = $type === 'stages'; @endphp
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <div class="app-content content container-fluid">
        <div class="list-page">

            <div class="list-page-header">
                <div>
                    <h1>{{ $isStage ? 'Candidate Stages' : 'Shortlist / Reject Reasons' }}</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a><span>›</span>
                        <a href="{{ route('admin.career-applications.index') }}">Recruitment</a><span>›</span>
                        {{ $isStage ? 'Stages' : 'Reasons' }}
                    </div>
                </div>
                <a href="{{ route('admin.recruitment.masters', $isStage ? 'reasons' : 'stages') }}" class="btn-secondary-dash">
                    {{ $isStage ? 'Manage Reasons' : 'Manage Stages' }}
                </a>
            </div>

            @if (session('success'))
                <div class="flash-success"><i class="fa fa-circle-check"></i> {{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="form-errors"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>
            @endif

            <div class="list-card">
                <div style="overflow-x:auto">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width:70px">Order</th>
                                <th style="width:220px">Title</th>
                                <th>Remarks</th>
                                @if ($isStage)<th style="width:200px">Summary group</th>@endif
                                <th style="width:80px">Active</th>
                                <th style="width:150px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <form id="f{{ $item->id }}" method="POST" action="{{ route('admin.recruitment.masters.update', [$type, $item->id]) }}">
                                        @csrf @method('PUT')
                                    </form>
                                    <td><input form="f{{ $item->id }}" class="field-input" type="number" name="sort_order" value="{{ $item->sort_order }}" min="0"></td>
                                    <td><input form="f{{ $item->id }}" class="field-input" name="title" value="{{ $item->title }}" required></td>
                                    <td><input form="f{{ $item->id }}" class="field-input" name="remarks" value="{{ $item->remarks }}"></td>
                                    @if ($isStage)
                                        <td>
                                            <select form="f{{ $item->id }}" class="field-select" name="bucket">
                                                @foreach ($buckets as $k => $label)
                                                    <option value="{{ $k }}" {{ $item->bucket === $k ? 'selected' : '' }}>{{ $label }}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    @endif
                                    <td style="text-align:center"><input form="f{{ $item->id }}" type="checkbox" name="is_active" value="1" {{ $item->is_active ? 'checked' : '' }}></td>
                                    <td>
                                        <div style="display:flex;gap:6px">
                                            <button form="f{{ $item->id }}" type="submit" class="btn-primary-dash"><i class="fa fa-save"></i></button>
                                            <button type="button" class="action-btn danger" title="Delete" onclick="delMaster({{ $item->id }})"><i class="fa fa-trash"></i></button>
                                            <form id="d{{ $item->id }}" method="POST" style="display:none" action="{{ route('admin.recruitment.masters.destroy', [$type, $item->id]) }}">
                                                @csrf @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            {{-- Add new --}}
                            <tr style="background:#f9fafb">
                                <form id="fnew" method="POST" action="{{ route('admin.recruitment.masters.store', $type) }}">@csrf</form>
                                <td><input form="fnew" class="field-input" type="number" name="sort_order" placeholder="auto" min="0"></td>
                                <td><input form="fnew" class="field-input" name="title" placeholder="New {{ $isStage ? 'stage' : 'reason' }}" required></td>
                                <td><input form="fnew" class="field-input" name="remarks" placeholder="Remarks"></td>
                                @if ($isStage)
                                    <td>
                                        <select form="fnew" class="field-select" name="bucket">
                                            @foreach ($buckets as $k => $label)
                                                <option value="{{ $k }}">{{ $label }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                @endif
                                <td></td>
                                <td><button form="fnew" type="submit" class="btn-primary-dash"><i class="fa fa-plus"></i> Add</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            @if ($isStage)
                <p style="font-size:12.5px;color:#667085;margin-top:12px">
                    "Summary group" decides which tile of the opening summary (and which colour) a stage belongs to.
                    Stages in <b>Shortlisted</b> and <b>Rejected / Withdrawn</b> groups ask for a Reason.
                </p>
            @endif
        </div>
    </div>
</div>

@include('admin.footer')

<script>
function delMaster(id) {
    Swal.fire({
        title: 'Delete?', text: 'This cannot be undone.', icon: 'warning',
        showCancelButton: true, confirmButtonColor: '#d33', confirmButtonText: 'Yes, Delete'
    }).then((r) => { if (r.isConfirmed) { document.getElementById('d' + id).submit(); } });
}
</script>
