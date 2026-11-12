{{-- Destination: resources/views/admin/leads/show.blade.php (View Lead) --}}
@php use App\Support\LeadOptions as LO; $st = $lead->status ?: 'New Lead'; @endphp
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <style>
        .lv-b { display:inline-block;padding:3px 10px;border-radius:999px;font-size:12px;font-weight:600;background:#f4f6f8;color:#5b6b7a;border:1px solid #e2e7ec; }
        .lv-b.warning { background:#fdf1e0;color:#a15c07;border-color:#fdf1e0; } .lv-b.primary { background:#eaf0fd;color:#1b3fa0;border-color:#eaf0fd; }
        .lv-b.info { background:#e6f4fb;color:#0c6a92;border-color:#e6f4fb; } .lv-b.success { background:#e8f6ee;color:#146c43;border-color:#e8f6ee; }
        .lv-b.danger { background:#fbeae9;color:#b3261e;border-color:#fbeae9; }
        .lv-note { padding:10px 0;border-bottom:1px solid #eef0f3;font-size:13.5px; } .lv-note:last-child { border-bottom:0; }
        .lv-note small { display:block;color:#98a2b3; }
    </style>

    <div class="app-content content container-fluid">
        <div class="edit-page">

            <div class="edit-page-header">
                <div>
                    <h1>Lead {{ $lead->lead_code }}</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a><span>›</span>
                        <a href="{{ route('admin.leads.index') }}">Lead CRM</a><span>›</span> View Lead
                    </div>
                </div>
                <div class="identity-chip">
                    <div class="identity-avatar">{{ \Illuminate\Support\Str::substr($lead->full_name, 0, 1) }}</div>
                    <div>
                        <div class="identity-name">{{ $lead->full_name }}</div>
                        <div class="identity-sub">{{ $lead->business_name ?: $lead->mobile }}</div>
                    </div>
                </div>
            </div>

            @if (session('success'))
                <div class="flash-success"><i class="fa fa-circle-check"></i> {{ session('success') }}</div>
            @endif

            <div class="edit-layout">
                <div>
                    <div class="section-card">
                        <div class="section-card-header"><h5>Contact</h5></div>
                        <div class="section-card-body">
                            <dl class="inbox-kv">
                                <dt>Name</dt><dd>{{ $lead->full_name }}</dd>
                                <dt>Mobile</dt>
                                <dd><a href="tel:{{ $lead->mobile }}">{{ $lead->mobile }}</a> {{ $lead->mobile_verified ? '· Verified' : '' }}</dd>
                                <dt>Email</dt><dd>@if ($lead->email)<a href="mailto:{{ $lead->email }}">{{ $lead->email }}</a>@else — @endif</dd>
                                <dt>Website</dt><dd>{{ $lead->website ?: '—' }}</dd>
                                <dt>Business</dt><dd>{{ $lead->business_name ?: '—' }}</dd>
                                <dt>Entity type</dt><dd>{{ $lead->entity_type ?: '—' }}</dd>
                                <dt>GST</dt><dd>{{ $lead->gst_number ?: '—' }}</dd>
                                <dt>CIN / Regd.</dt><dd>{{ $lead->cin_number ?: '—' }}</dd>
                                <dt>Address</dt><dd>{{ $lead->address ?: '—' }}</dd>
                                <dt>State / City</dt><dd>{{ $stateName ?: '—' }} / {{ $cityName ?: '—' }}</dd>
                                <dt>Pin code</dt><dd>{{ $lead->pincode ?: '—' }}</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Requirement</h5></div>
                        <div class="section-card-body">
                            <dl class="inbox-kv">
                                <dt>Service</dt><dd>{{ $lead->service_type ?: '—' }}</dd>
                                <dt>Industry</dt><dd>{{ $lead->industry ?: '—' }}</dd>
                            </dl>
                            @if ($lead->details)
                                <div class="inbox-message" style="margin-top:12px">{{ $lead->details }}</div>
                            @endif
                        </div>
                    </div>
                </div>

                <div>
                    <div class="section-card">
                        <div class="section-card-header"><h5>Lead</h5></div>
                        <div class="section-card-body">
                            <dl class="inbox-kv" style="grid-template-columns:110px 1fr">
                                <dt>Status</dt><dd><span class="lv-b {{ LO::STATUS_CLASS[$st] ?? '' }}">{{ $st }}</span></dd>
                                <dt>Lead type</dt><dd><span class="lv-b {{ LO::TYPE_CLASS[$lead->lead_type] ?? '' }}">{{ $lead->lead_type ?: '—' }}</span></dd>
                                <dt>Source</dt><dd>{{ $lead->lead_source }}@if (isset(LO::FORM_TYPES[$lead->form_type])) · {{ LO::FORM_TYPES[$lead->form_type][0] }}@endif</dd>
                                <dt>Received</dt><dd>{{ $lead->created_at->format('d M Y, h:i A') }}</dd>
                            </dl>
                            @if ($lead->status === 'Not Converted' && $lead->not_converted_reason)
                                <p style="margin:12px 0 0;font-size:13px;color:#667085"><b>Reason:</b> {{ $lead->not_converted_reason }}</p>
                            @endif
                            @if ($lead->source)
                                <p style="margin:12px 0 0;font-size:12.5px;color:#667085">Converted from an enquiry (#{{ $lead->source_id }}).</p>
                            @endif
                        </div>
                    </div>

                    <div class="section-card">
                        <div class="section-card-header"><h5>Notes &amp; Followups</h5></div>
                        <div class="section-card-body">
                            @forelse ($lead->notes as $n)
                                <div class="lv-note">
                                    {!! nl2br(e($n->note)) !!}
                                    <small>{{ $n->created_at->format('d M Y, h:i A') }}@if ($n->next_followup_date) · Next followup: {{ $n->next_followup_date->format('d M Y') }}@endif</small>
                                </div>
                            @empty
                                <p style="margin:0;color:#98a2b3;font-size:13px">No notes yet. Add notes from the lead list.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-card" style="margin-top:20px;margin-bottom:0">
                <div class="section-card-body" style="display:flex;justify-content:flex-end;padding:14px 20px">
                    <a href="{{ route($lead->status === 'Invalid Lead' ? 'admin.leads.invalid' : 'admin.leads.index') }}" class="btn-secondary-dash">
                        <i class="fa fa-arrow-left"></i> Back to leads
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')
