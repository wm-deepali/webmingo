{{--
    Destination: resources/views/admin/careers/_pipeline-summary.blade.php
    Include at the TOP of the admin opening "View" page, above the opening content:

        @include('admin.careers._pipeline-summary', ['career' => $career])
--}}
@php $summary = \App\Support\Recruitment::summary($career); @endphp

<style>
    .pipe-summary { display:grid;grid-template-columns:repeat(auto-fit,minmax(140px,1fr));gap:12px;margin-bottom:20px; }
    .pipe-tile { display:block;padding:14px 16px;border:1px solid #e4e7ec;border-radius:12px;background:#fff;text-decoration:none;color:#101828; }
    .pipe-tile:hover { border-color:#101828; }
    .pipe-tile b { display:block;font-size:26px;line-height:1.1; }
    .pipe-tile span { font-size:12px;color:#667085; }
    .pipe-tile.total { background:#101828;color:#fff;border-color:#101828; }
    .pipe-tile.total span { color:#d0d5dd; }
</style>

<div class="pipe-summary">
    <a class="pipe-tile total" href="{{ route('admin.career-applications.index', ['career_id' => $career->id]) }}">
        <b>{{ $summary['total'] }}</b><span>Total Applications Received</span>
    </a>
    @foreach ($summary['buckets'] as $bucket => $row)
        <a class="pipe-tile" href="{{ route('admin.career-applications.index', ['career_id' => $career->id, 'bucket' => $bucket]) }}">
            <b>{{ $row['count'] }}</b><span>{{ $row['label'] }}</span>
        </a>
    @endforeach
</div>
