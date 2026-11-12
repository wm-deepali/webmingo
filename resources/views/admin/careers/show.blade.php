@include('admin.top-header')

<div class="main-section">
    @include('admin.header')

    @include('admin.careers._styles')

    <div class="app-content content container-fluid">
        <div class="list-page">

            <!-- Page header -->
            <div class="page-header">
                <div>
                    <h1>{{ $career->title }}</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        <a href="{{ route('admin.careers.index') }}">Manage Careers</a>
                        <span>›</span>
                        View Career
                    </div>
                </div>
                <div style="display:flex;gap:8px">
                    <a href="{{ route('admin.career-applications.index', ['career_id' => $career->id]) }}" class="btn-primary-dash">
                        <i class="fa fa-users"></i> View Candidates
                    </a>
                    <a href="{{ route('admin.careers.edit', $career->id) }}" class="btn-primary-dash">
                        <i class="fa fa-pencil"></i> Edit
                    </a>
                </div>
            </div>

            {{-- 1. Pipeline summary (top) --}}
            @include('admin.careers._pipeline-summary', ['career' => $career])

            {{-- 2. Opening content --}}
            <div class="list-card" style="padding:24px">

                <div style="display:flex;gap:10px;flex-wrap:wrap;margin-bottom:16px">
                    <span class="pill pill-type">{{ $career->type }}</span>
                    <span class="pill pill-type">{{ $career->employment_type }}</span>
                    @if ($career->work_mode) <span class="pill pill-type">{{ $career->work_mode }}</span> @endif
                    @if ($career->status)
                        <span class="pill pill-active">Active</span>
                    @else
                        <span class="pill pill-inactive">Inactive</span>
                    @endif
                </div>

                <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(180px,1fr));gap:12px;margin-bottom:20px">
                    <div><small style="color:#667085">Department</small><div><b>{{ $career->department }}</b></div></div>
                    <div><small style="color:#667085">Location</small><div><b>{{ $career->location ?: '—' }}</b></div></div>
                    <div><small style="color:#667085">Experience</small><div><b>{{ $career->experience ?: '—' }}</b></div></div>
                    <div><small style="color:#667085">Salary</small><div><b>{{ $career->salary ?: '—' }}</b></div></div>
                </div>

                @if ($career->short_description)
                    <p style="color:#475467">{{ $career->short_description }}</p>
                @endif

                @if ($career->description)
                    <div style="margin-bottom:20px">{!! $career->description !!}</div>
                @endif

                @foreach ([
                    'What You’ll Do' => $career->responsibilities_list,
                    'What We’re Looking For' => $career->requirements_list,
                    'Nice To Have' => $career->nice_to_have_list,
                ] as $heading => $items)
                    @if (count($items))
                        <h5 style="margin:20px 0 8px">{{ $heading }}</h5>
                        <ul style="padding-left:18px;margin:0">
                            @foreach ($items as $item)
                                <li style="margin-bottom:4px">{{ $item }}</li>
                            @endforeach
                        </ul>
                    @endif
                @endforeach
            </div>

        </div>
    </div>
</div>

@include('admin.footer')