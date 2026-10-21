@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.careers._styles')

    <div class="app-content content container-fluid">
        <div class="list-page">

            <!-- Page header -->
            <div class="page-header">
                <div>
                    <h1>Page Hero Sections</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        Page Hero Sections
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="flash-success">{{ session('success') }}</div>
            @endif

            <p style="margin:0 0 16px;font-size:13px;color:var(--text-secondary)">
                Edit the heading, text and buttons at the top of each page. The background video is fixed.
                Pages marked <strong>Default</strong> are showing the text written in the page itself.
            </p>

            @foreach ($groups as $groupName => $pages)
                <div class="list-card" style="margin-bottom:20px">
                    <div class="section-card-header"><h5>{{ $groupName }}</h5></div>

                    <div style="overflow-x:auto">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th>Page</th>
                                    <th>Current Heading</th>
                                    <th style="width:120px">Status</th>
                                    <th style="width:100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $key => $label)
                                    @php $hero = $heroes->get($key); @endphp
                                    <tr>
                                        <td>
                                            <div class="row-title">{{ $label }}</div>
                                            <div class="row-sub"><span class="id-chip">{{ $key }}</span></div>
                                        </td>

                                        <td>
                                            @if ($hero && $hero->heading)
                                                {{ \Illuminate\Support\Str::limit($hero->heading, 80) }}
                                            @else
                                                <span style="color:var(--text-hint)">—</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if ($hero)
                                                <span class="pill pill-active">Customised</span>
                                            @else
                                                <span class="pill pill-type">Default</span>
                                            @endif
                                        </td>

                                        <td>
                                            <div style="display:flex;gap:6px">
                                                <a href="{{ route('admin.page-heroes.edit', $key) }}"
                                                   class="action-btn edit" title="Edit hero">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                @if (Route::has($key))
                                                    <a href="{{ route($key) }}" target="_blank" rel="noopener"
                                                       class="action-btn" title="View page">
                                                        <i class="fa fa-arrow-up-right-from-square"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

@include('admin.footer')e