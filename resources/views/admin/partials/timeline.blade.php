{{--
    Destination: resources/views/admin/partials/timeline.blade.php
    Usage: @include('admin.partials.timeline', ['items' => $model->activities->map->toTimeline()])
    Each item: type, title, from, to, note, meta, by, at (Carbon)
--}}
@php $items = collect($items); @endphp

<style>
    .tl { list-style:none;margin:0;padding:0 0 0 4px;position:relative; }
    .tl::before { content:'';position:absolute;left:9px;top:6px;bottom:6px;width:2px;background:#e4e7ec; }
    .tl-item { position:relative;padding:0 0 18px 30px; }
    .tl-item:last-child { padding-bottom:0; }
    .tl-dot { position:absolute;left:0;top:3px;width:20px;height:20px;border-radius:50%;background:#fff;border:3px solid #98a2b3;box-sizing:border-box;z-index:1; }
    .tl-created .tl-dot { border-color:#12b76a; }
    .tl-stage .tl-dot, .tl-status .tl-dot { border-color:#2e6bdc; }
    .tl-shift .tl-dot { border-color:#7e22ce; }
    .tl-note .tl-dot { border-color:#f79009; }
    .tl-lead_type .tl-dot { border-color:#ee6c4d; }
    .tl-title { font-size:13.5px;font-weight:700;color:#101828; }
    .tl-chips { display:inline-flex;align-items:center;gap:6px;margin-left:6px;font-weight:600; }
    .tl-chips i { font-size:10px;color:#98a2b3; }
    .tl-chip { display:inline-block;padding:1px 9px;border-radius:20px;font-size:11.5px;background:#f2f4f7;color:#475467; }
    .tl-chip.to { background:#e8f0fe;color:#1d4ed8; }
    .tl-note { margin-top:4px;font-size:13px;color:#475467;background:#f9fafb;border:1px solid #eef0f3;border-radius:8px;padding:7px 10px; }
    .tl-meta { margin-top:4px;font-size:12.5px;color:#b54708; }
    .tl-time { margin-top:4px;font-size:12px;color:#98a2b3; }
</style>

@if ($items->isEmpty())
    <p style="margin:0;color:#98a2b3;font-size:13px">No activity yet.</p>
@else
    <ul class="tl">
        @foreach ($items as $i)
            <li class="tl-item tl-{{ $i['type'] }}">
                <span class="tl-dot"></span>
                <div class="tl-title">
                    {{ $i['title'] }}
                    @if ($i['from'] || $i['to'])
                        <span class="tl-chips">
                            @if ($i['from'])<span class="tl-chip">{{ $i['from'] }}</span><i class="fa fa-arrow-right"></i>@endif
                            @if ($i['to'])<span class="tl-chip to">{{ $i['to'] }}</span>@endif
                        </span>
                    @endif
                </div>
                @if ($i['note'])<div class="tl-note">{!! nl2br(e($i['note'])) !!}</div>@endif
                @if ($i['meta'])<div class="tl-meta"><i class="fa fa-calendar-check"></i> {{ $i['meta'] }}</div>@endif
                <div class="tl-time">
                    <i class="fa fa-clock"></i> {{ $i['at']->format('d M Y, h:i A') }}@if ($i['by']) · by {{ $i['by'] }}@endif
                </div>
            </li>
        @endforeach
    </ul>
@endif
