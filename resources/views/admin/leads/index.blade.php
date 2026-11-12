{{-- Destination: resources/views/admin/leads/index.blade.php (Leads + Invalid Leads) --}}
@php
    use App\Support\LeadOptions as LO;
    $routeName = $invalid ? 'admin.leads.invalid' : 'admin.leads.index';
    $title = $invalid ? 'Invalid Leads' : 'Lead Enquiry';
    $visibleStatuses = array_values(array_diff(LO::STATUSES, ['Invalid Lead']));
    $filterKeys = ['q', 'from', 'to', 'lead_source', 'lead_type', 'followup', 'status'];
@endphp
@include('admin.top-header')

<div class="main-section">
    @include('admin.header')
    @include('admin.partials.inbox-styles')

    <style>
        .mv-pill { display:inline-flex;align-items:center;gap:4px;margin-left:6px;padding:1px 8px;border-radius:20px;border:1px solid transparent;font-size:11px;font-weight:700;line-height:1.6;white-space:nowrap;vertical-align:middle; }
        .mv-pill i { font-size:10px; }
        .mv-pill.yes { background:#e3f1ec;color:#007a5e;border-color:#9fcfc3; }
        .mv-pill.no  { background:#fff5cc;color:#916a00;border-color:#e8d080; }

        .lead-pill { display:inline-block;padding:2px 10px;border-radius:20px;font-size:12px;font-weight:700;background:#eef0f3;color:#344054;white-space:nowrap; }
        .lead-pill.default { background:#eef0f3;color:#344054; }
        .lead-pill.primary { background:#e8f0fe;color:#1d4ed8; }
        .lead-pill.warning { background:#fff5cc;color:#916a00; }
        .lead-pill.info    { background:#e0f2fe;color:#0369a1; }
        .lead-pill.success { background:#e3f1ec;color:#007a5e; }
        .lead-pill.danger  { background:#fde8e8;color:#b42318; }

        .ld-section { margin-bottom:18px; }
        .ld-section-title { font-size:12.5px;font-weight:700;color:#667085;margin:0 0 12px;padding-bottom:7px;border-bottom:1px solid #e4e7ec; }
        .ld-grid { display:grid;grid-template-columns:repeat(auto-fit,minmax(190px,1fr));gap:0 16px; }
        .ld-full { grid-column:1 / -1; }
        .ld-req { color:#d92d20; }
        .ld-alert { display:none;color:#d92d20;font-size:11.5px;font-weight:600;margin-top:5px; }

        .ld-overlay { display:none;position:fixed;inset:0;z-index:9999;align-items:flex-start;justify-content:center;padding:30px 16px;background:rgba(0,0,0,.55);overflow-y:auto; }
        .ld-overlay.open { display:flex; }
        .ld-box { width:100%;max-width:720px;background:#fff;border-radius:12px;box-shadow:0 24px 60px rgba(0,0,0,.25); }
        .ld-box-head { display:flex;justify-content:space-between;align-items:center;padding:14px 20px;border-bottom:1px solid #e4e7ec; }
        .ld-box-head h4 { margin:0;font-size:16px;font-weight:700; }
        .ld-box-head small { color:#667085;margin-left:6px; }
        .ld-close { border:0;background:#f2f4f7;border-radius:50%;width:30px;height:30px;font-size:18px;cursor:pointer; }
        .ld-box-body { padding:18px 22px; }
        .ld-box-foot { display:flex;justify-content:flex-end;gap:8px;padding:12px 20px;border-top:1px solid #e4e7ec; }
    </style>

    <div class="app-content content container-fluid">
        <div class="list-page">

            <!-- Page header -->
            <div class="list-page-header">
                <div>
                    <h1>{{ $title }}</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a><span>›</span> Lead CRM <span>›</span> {{ $title }}
                    </div>
                </div>
                <div style="display:flex;gap:8px;flex-wrap:wrap">
                    @unless ($invalid)
                        <button type="button" class="btn-primary-dash" id="ldOpenAdd"><i class="fa fa-plus"></i> Add Lead</button>
                    @endunless
                    <a href="{{ route('admin.leads.export', array_merge(request()->query(), ['invalid' => $invalid ? 1 : 0])) }}" class="btn-secondary-dash"><i class="fa fa-file-csv"></i> Export CSV</a>
                    <a href="{{ route('admin.leads.export', array_merge(request()->query(), ['invalid' => $invalid ? 1 : 0, 'format' => 'xls'])) }}" class="btn-secondary-dash"><i class="fa fa-file-excel"></i> Excel</a>
                    <button type="button" class="btn-secondary-dash" id="ldPrint"><i class="fa fa-print"></i> Print</button>
                    <a href="{{ route($invalid ? 'admin.leads.index' : 'admin.leads.invalid') }}" class="btn-secondary-dash">
                        <i class="fa {{ $invalid ? 'fa-arrow-left' : 'fa-ban' }}"></i> {{ $invalid ? 'All Leads' : 'Invalid Leads' }}
                    </a>
                </div>
            </div>

            @if (session('success'))
                <div class="flash-success"><i class="fa fa-circle-check"></i> {{ session('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="form-errors"><ul>@foreach ($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul></div>
            @endif

            <!-- Status tabs -->
            @unless ($invalid)
                <div class="filter-tabs">
                    <a class="filter-tab {{ request('status') ? '' : 'active' }}"
                       href="{{ route($routeName, request()->except('status', 'page')) }}">
                        All <b>{{ $counts->except('Invalid Lead')->sum() }}</b>
                    </a>
                    @foreach ($visibleStatuses as $status)
                        <a class="filter-tab {{ request('status') === $status ? 'active' : '' }}"
                           href="{{ route($routeName, array_merge(request()->except('page'), ['status' => $status])) }}">
                            {{ $status }} <b>{{ $counts[$status] ?? 0 }}</b>
                        </a>
                    @endforeach
                </div>
            @endunless

            <!-- Main card -->
            <div class="list-card">

                <!-- Filters -->
                <form method="GET" id="ldFilters" action="{{ route($routeName) }}" class="list-toolbar" style="flex-wrap:wrap">
                    @if (request('status'))
                        <input type="hidden" name="status" value="{{ request('status') }}">
                    @endif

                    <input type="text" name="q" value="{{ request('q') }}" class="field-input"
                           placeholder="Search name, mobile, email, business, lead ID">

                    <select name="lead_source" class="field-select">
                        <option value="">All sources</option>
                        @foreach (LO::SOURCES as $s)
                            <option value="{{ $s }}" {{ request('lead_source') === $s ? 'selected' : '' }}>{{ $s }}</option>
                        @endforeach
                    </select>

                    <select name="lead_type" class="field-select">
                        <option value="">All lead types</option>
                        @foreach (LO::LEAD_TYPES as $s)
                            <option value="{{ $s }}" {{ request('lead_type') === $s ? 'selected' : '' }}>{{ $s }}</option>
                        @endforeach
                    </select>

                    <input type="date" name="from" value="{{ request('from') }}" class="field-input" title="Received from" style="max-width:160px">
                    <input type="date" name="to" value="{{ request('to') }}" class="field-input" title="Received to" style="max-width:160px">
                    <input type="date" name="followup" value="{{ request('followup') }}" class="field-input" title="Next followup date" style="max-width:160px">

                    <button type="submit" class="btn-primary-dash"><i class="fa fa-search"></i> Filter</button>
                    <a href="{{ route($routeName, array_merge(request()->except('page', 'followup'), ['followup' => now()->toDateString()])) }}" class="btn-secondary-dash">
                        <i class="fa fa-calendar-check"></i> Today's Followup
                    </a>
                    @if (request()->hasAny($filterKeys))
                        <a href="{{ route($routeName) }}" class="btn-secondary-dash">Reset</a>
                    @endif
                    <button type="button" class="btn-danger-dash" id="ldBulk" disabled style="margin-left:auto">
                        <i class="fa fa-trash"></i> Delete Selected (<span id="ldBulkCount">0</span>)
                    </button>
                </form>

                <div style="overflow-x:auto">
                    <table class="data-table" id="ldTable">
                        <thead>
                            <tr>
                                <th style="width:36px"><input type="checkbox" id="ldAll"></th>
                                <th style="width:90px">Lead ID</th>
                                <th>Lead</th>
                                <th style="width:190px">Source</th>
                                <th style="width:120px">Next Followup</th>
                                <th style="width:130px">Received</th>
                                <th style="width:150px">Status</th>
                                <th style="width:90px">Lead Type</th>
                                <th style="width:130px">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($leads as $lead)
                                @php
                                    $ft = LO::FORM_TYPES[$lead->form_type] ?? null;
                                    $st = $lead->status ?: 'New Lead';
                                @endphp
                                <tr id="row{{ $lead->id }}" class="{{ $st === 'New Lead' ? 'is-new' : '' }}">
                                    <td><input type="checkbox" class="ld-check" value="{{ $lead->id }}"></td>

                                    <td><span class="id-chip">{{ $lead->lead_code }}</span></td>

                                    <td>
                                        <div class="row-title"><a href="{{ route('admin.leads.show', $lead) }}">{{ $lead->full_name }}</a></div>
                                        <div class="row-sub">
                                            {{ $lead->mobile }}
                                            @if ($lead->mobile_verified)
                                                <span class="mv-pill yes" title="Mobile number verified with OTP"><i class="fa fa-circle-check"></i> Verified</span>
                                            @else
                                                <span class="mv-pill no" title="Mobile number was not verified"><i class="fa fa-circle-exclamation"></i> Not verified</span>
                                            @endif
                                        </div>
                                        @if ($lead->email)<div class="row-sub">{{ $lead->email }}</div>@endif
                                        @if ($lead->business_name)<div class="row-sub">{{ $lead->business_name }}</div>@endif
                                    </td>

                                    <td>
                                        <div class="row-title">{{ $lead->lead_source ?: '—' }}</div>
                                        @if ($ft)
                                            <div class="row-sub"><span class="pill pill-type">{{ $ft[0] }}</span></div>
                                        @endif
                                    </td>

                                    <td>{{ $lead->next_followup_date ? \Illuminate\Support\Carbon::parse($lead->next_followup_date)->format('d M Y') : '—' }}</td>

                                    <td style="white-space:nowrap">
                                        {{ $lead->created_at->format('d M Y') }}
                                        <div class="row-sub">{{ $lead->created_at->format('h:i A') }}</div>
                                    </td>

                                    <td><span class="lead-pill {{ LO::STATUS_CLASS[$st] ?? 'default' }}">{{ $st }}</span></td>

                                    <td>
                                        @if ($lead->lead_type)
                                            <span class="lead-pill {{ LO::TYPE_CLASS[$lead->lead_type] ?? 'default' }}">{{ $lead->lead_type }}</span>
                                        @else
                                            —
                                        @endif
                                    </td>

                                    <td>
                                        <div style="display:flex;gap:6px">
                                            <a href="{{ route('admin.leads.show', $lead) }}" class="action-btn view" title="View"><i class="fa fa-eye"></i></a>
                                            <button type="button" class="action-btn view" title="Edit Lead" data-edit="{{ $lead->id }}"><i class="fa fa-pen"></i></button>
                                            <button type="button" class="action-btn view" title="Notes & Followup" data-notes="{{ $lead->id }}"><i class="fa fa-note-sticky"></i></button>
                                            <button type="button" class="action-btn danger" title="Delete" data-del="{{ $lead->id }}"><i class="fa fa-trash"></i></button>
                                            <form id="ldDel{{ $lead->id }}" method="POST" style="display:none" action="{{ route('admin.leads.destroy', $lead) }}">
                                                @csrf @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9">
                                        <div class="empty-state">
                                            <div class="empty-icon-wrap"><i class="fa fa-bullseye"></i></div>
                                            <h6>No Leads Found</h6>
                                            <p>Add a lead manually, or convert a Contact, Knowledge Base or Package enquiry.</p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                @if ($leads->hasPages())
                    <div class="pagination-bar">{{ $leads->links('pagination::bootstrap-4') }}</div>
                @endif

                <form id="ldBulkForm" method="POST" action="{{ route('admin.leads.bulk-delete') }}" style="display:none">@csrf</form>
            </div>
        </div>
    </div>
</div>

{{-- ============ Add Lead ============ --}}
<div class="ld-overlay" id="ldAddModal">
    <div class="ld-box">
        <div class="ld-box-head"><h4><i class="fa fa-user-plus"></i> Add Lead</h4><button type="button" class="ld-close" data-close>&times;</button></div>
        <div class="ld-box-body">
            <div class="ld-section">
                <p class="ld-section-title">Lead source</p>
                <div class="ld-grid">
                    <div class="field-group"><label class="field-label">Lead Source</label><input class="field-input" value="Manual" disabled></div>
                    <div class="field-group"><label class="field-label">Source Type <span class="ld-req">*</span></label>
                        <select class="field-select" id="add_sub_source">
                            <option value="">-- Select --</option>
                            @foreach (LO::SUB_SOURCES as $k => $l)<option value="{{ $k }}">{{ $l }}</option>@endforeach
                        </select></div>
                </div>
            </div>
            @include('admin.leads._fields', ['p' => 'add_'])
        </div>
        <div class="ld-box-foot">
            <button type="button" class="btn-secondary-dash" data-close>Close</button>
            <button type="button" class="btn-primary-dash" id="ldSaveAdd"><i class="fa fa-save"></i> Add Lead</button>
        </div>
    </div>
</div>

{{-- ============ Edit Lead ============ --}}
<div class="ld-overlay" id="ldEditModal">
    <div class="ld-box">
        <div class="ld-box-head"><h4>Edit Lead <small id="ldEditCode"></small></h4><button type="button" class="ld-close" data-close>&times;</button></div>
        <div class="ld-box-body">
            <input type="hidden" id="lead_id">
            <div class="ld-section">
                <p class="ld-section-title">Status</p>
                <div class="ld-grid">
                    <div class="field-group"><label class="field-label">Status</label>
                        <select class="field-select" id="lead_status">
                            @foreach (LO::STATUSES as $s)<option value="{{ $s }}">{{ $s }}</option>@endforeach
                        </select></div>
                    <div class="field-group ld-full" id="lead_reason_group" style="display:none"><label class="field-label">Reason (Not Converted)</label>
                        <textarea class="field-input" id="lead_not_converted_reason" rows="2" placeholder="Why wasn't this lead converted?"></textarea></div>
                </div>
            </div>
            @include('admin.leads._fields', ['p' => 'lead_'])
        </div>
        <div class="ld-box-foot">
            <button type="button" class="btn-secondary-dash" data-close>Close</button>
            <button type="button" class="btn-primary-dash" id="ldSaveEdit"><i class="fa fa-save"></i> Save Lead</button>
        </div>
    </div>
</div>

{{-- ============ Notes & Followup ============ --}}
<div class="ld-overlay" id="ldNotesModal">
    <div class="ld-box">
        <div class="ld-box-head"><h4>Notes &amp; Next Followup <small id="ldNotesCode"></small></h4><button type="button" class="ld-close" data-close>&times;</button></div>
        <div class="ld-box-body">
            <input type="hidden" id="notes_lead_id">
            <div class="ld-grid" style="grid-template-columns:2fr 1fr;margin-bottom:4px">
                <div class="field-group"><label class="field-label">Note</label>
                    <textarea class="field-input" id="note_text" rows="2" placeholder="What happened on this call / followup..."></textarea></div>
                <div class="field-group"><label class="field-label">Next Followup Date <small>(optional)</small></label>
                    <input type="date" class="field-input" id="note_followup"></div>
            </div>
            <button type="button" class="btn-primary-dash" id="ldAddNote"><i class="fa fa-plus"></i> Add Note</button>

            <div style="overflow-x:auto;margin-top:16px">
                <table class="data-table">
                    <thead><tr><th style="width:24%">Date &amp; Time</th><th>Notes</th><th style="width:18%">Next Followup</th></tr></thead>
                    <tbody id="ldNotesBody"></tbody>
                </table>
            </div>
        </div>
        <div class="ld-box-foot"><button type="button" class="btn-secondary-dash" data-close>Close</button></div>
    </div>
</div>

@include('admin.footer')

<script>
(function () {
    var CSRF = @json(csrf_token());
    var URL = {
        base: @json(url('admin/leads')),
        states: @json(route('admin.leads.states')),
        cities: @json(route('admin.leads.cities')),
        store: @json(route('admin.leads.store'))
    };
    var FIELDS = ['service_type','full_name','mobile','business_name','entity_type','gst_number','cin_number','email','website','industry','lead_type','address','state','city','pincode','details'];

    function $(id) { return document.getElementById(id); }
    function api(method, url, body) {
        return fetch(url, {
            method: method,
            headers: { 'Content-Type': 'application/json', 'Accept': 'application/json', 'X-CSRF-TOKEN': CSRF, 'X-Requested-With': 'XMLHttpRequest' },
            body: body ? JSON.stringify(body) : undefined
        }).then(function (r) { return r.json().catch(function () { return {}; }).then(function (d) { d._ok = r.ok; return d; }); });
    }
    function errText(d) {
        if (d.errors) { var k = Object.keys(d.errors)[0]; return d.errors[k][0]; }
        return d.message || 'Something went wrong. Please try again.';
    }
    function esc(s) { var d = document.createElement('div'); d.textContent = s == null ? '' : s; return d.innerHTML; }

    /* modals */
    function openM(id) { $(id).classList.add('open'); document.body.style.overflow = 'hidden'; }
    function closeM(el) { el.classList.remove('open'); document.body.style.overflow = ''; }
    document.querySelectorAll('.ld-overlay').forEach(function (ov) {
        ov.addEventListener('mousedown', function (e) { if (e.target === ov) { closeM(ov); } });
        ov.querySelectorAll('[data-close]').forEach(function (b) { b.addEventListener('click', function () { closeM(ov); }); });
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') { document.querySelectorAll('.ld-overlay.open').forEach(closeM); }
    });

    /* print (current page rows, without checkbox + action columns) */
    $('ldPrint').addEventListener('click', function () {
        var t = $('ldTable').cloneNode(true);
        t.querySelectorAll('tr').forEach(function (tr) {
            var c = tr.children; if (c.length > 2) { tr.removeChild(c[c.length - 1]); tr.removeChild(c[0]); }
        });
        var w = window.open('', '_blank');
        w.document.write('<html><head><title>Leads</title><style>body{font-family:sans-serif;font-size:13px}table{border-collapse:collapse;width:100%}th,td{border:1px solid #999;padding:6px;text-align:left}</style></head><body>' + t.outerHTML + '</body></html>');
        w.document.close(); w.focus(); w.print();
    });

    /* bulk select + delete */
    function syncBulk() {
        var n = document.querySelectorAll('.ld-check:checked').length;
        $('ldBulkCount').textContent = n; $('ldBulk').disabled = n === 0;
    }
    $('ldAll').addEventListener('change', function () {
        var c = this.checked; document.querySelectorAll('.ld-check').forEach(function (x) { x.checked = c; }); syncBulk();
    });
    document.querySelectorAll('.ld-check').forEach(function (x) { x.addEventListener('change', syncBulk); });

    function confirmBox(title, text, ok) {
        if (window.Swal) {
            Swal.fire({ title: title, text: text, icon: 'warning', showCancelButton: true, confirmButtonColor: '#d33', confirmButtonText: 'Yes, Delete' })
                .then(function (r) { if (r.isConfirmed) { ok(); } });
        } else if (confirm(title + ' ' + text)) { ok(); }
    }
    $('ldBulk').addEventListener('click', function () {
        var ids = Array.prototype.map.call(document.querySelectorAll('.ld-check:checked'), function (x) { return x.value; });
        confirmBox('Delete ' + ids.length + ' lead(s)?', 'This cannot be undone.', function () {
            var f = $('ldBulkForm');
            ids.forEach(function (id) { var i = document.createElement('input'); i.type = 'hidden'; i.name = 'ids[]'; i.value = id; f.appendChild(i); });
            f.submit();
        });
    });
    document.querySelectorAll('[data-del]').forEach(function (b) {
        b.addEventListener('click', function () {
            confirmBox('Delete Lead?', 'This action cannot be undone.', function () { $('ldDel' + b.getAttribute('data-del')).submit(); });
        });
    });

    /* entity-type rule: business name filled => entity type required */
    function wireEntity(p) {
        var bn = $(p + 'business_name'), et = $(p + 'entity_type'), star = $(p + 'entity_star'), al = $(p + 'entity_alert');
        function check() {
            var need = bn.value.trim().length > 0;
            star.style.display = need ? '' : 'none';
            if (need && !et.value) { al.style.display = 'block'; return false; }
            al.style.display = 'none'; return true;
        }
        bn.addEventListener('input', check); et.addEventListener('change', check);
        return check;
    }
    var checkAdd = wireEntity('add_'), checkEdit = wireEntity('lead_');

    /* states / cities */
    function loadStates(p, selected, cb) {
        api('GET', URL.states).then(function (d) {
            var s = $(p + 'state'); s.innerHTML = '<option value="">-- Select State --</option>';
            (d.states || []).forEach(function (x) { s.insertAdjacentHTML('beforeend', '<option value="' + x.id + '">' + esc(x.name) + '</option>'); });
            if (selected) { s.value = selected; }
            if (cb) { cb(); }
        });
    }
    function loadCities(p, selected) {
        var c = $(p + 'city'), sid = $(p + 'state').value;
        c.innerHTML = '<option value="">-- Select City --</option>';
        if (!sid) { return; }
        api('GET', URL.cities + '?state_id=' + encodeURIComponent(sid)).then(function (d) {
            (d.cities || []).forEach(function (x) { c.insertAdjacentHTML('beforeend', '<option value="' + x.id + '">' + esc(x.name) + '</option>'); });
            if (selected) { c.value = selected; }
        });
    }
    $('add_state').addEventListener('change', function () { loadCities('add_'); });
    $('lead_state').addEventListener('change', function () { loadCities('lead_'); });

    function collect(p) {
        var o = {}; FIELDS.forEach(function (f) { o[f] = $(p + f).value; }); return o;
    }

    /* add lead */
    var openAdd = $('ldOpenAdd');
    if (openAdd) {
        openAdd.addEventListener('click', function () {
            FIELDS.forEach(function (f) { $('add_' + f).value = ''; });
            $('add_sub_source').value = '';
            $('add_entity_alert').style.display = 'none'; $('add_entity_star').style.display = 'none';
            $('add_city').innerHTML = '<option value="">-- Select City --</option>';
            loadStates('add_'); openM('ldAddModal');
        });
    }
    $('ldSaveAdd').addEventListener('click', function () {
        if (!$('add_sub_source').value) { alert('Please select WhatsApp, Call or Email.'); return; }
        if (!checkAdd()) { $('add_entity_type').focus(); return; }
        var body = collect('add_'); body.sub_source = $('add_sub_source').value;
        api('POST', URL.store, body).then(function (d) {
            if (d._ok && d.success) { location.reload(); } else { alert(errText(d)); }
        });
    });

    /* edit lead */
    document.querySelectorAll('[data-edit]').forEach(function (b) {
        b.addEventListener('click', function () {
            var id = b.getAttribute('data-edit');
            api('GET', URL.base + '/' + id + '/data').then(function (d) {
                if (!d.success) { alert('Could not load lead.'); return; }
                var l = d.lead;
                $('lead_id').value = id;
                $('ldEditCode').textContent = '#' + id;
                FIELDS.forEach(function (f) { if (f !== 'state' && f !== 'city') { $('lead_' + f).value = l[f] == null ? '' : l[f]; } });
                $('lead_status').value = l.status || 'New Lead';
                $('lead_not_converted_reason').value = l.not_converted_reason || '';
                $('lead_reason_group').style.display = $('lead_status').value === 'Not Converted' ? '' : 'none';
                loadStates('lead_', l.state, function () { loadCities('lead_', l.city); });
                checkEdit(); openM('ldEditModal');
            });
        });
    });
    $('lead_status').addEventListener('change', function () {
        $('lead_reason_group').style.display = this.value === 'Not Converted' ? '' : 'none';
    });
    $('ldSaveEdit').addEventListener('click', function () {
        if (!checkEdit()) { $('lead_entity_type').focus(); return; }
        var body = collect('lead_');
        body.status = $('lead_status').value;
        body.not_converted_reason = body.status === 'Not Converted' ? $('lead_not_converted_reason').value : '';
        api('PUT', URL.base + '/' + $('lead_id').value, body).then(function (d) {
            if (d._ok && d.success) { location.reload(); } else { alert(errText(d)); }
        });
    });

    /* notes */
    function renderNotes(notes) {
        var tb = $('ldNotesBody'); tb.innerHTML = '';
        if (!notes.length) { tb.innerHTML = '<tr><td colspan="3" style="text-align:center">No notes yet</td></tr>'; return; }
        notes.forEach(function (n) {
            tb.insertAdjacentHTML('beforeend', '<tr><td>' + esc(n.created_at) + '</td><td>' + esc(n.note).replace(/\n/g, '<br>') + '</td><td>' + (n.next_followup_date || '—') + '</td></tr>');
        });
    }
    document.querySelectorAll('[data-notes]').forEach(function (b) {
        b.addEventListener('click', function () {
            var id = b.getAttribute('data-notes');
            $('notes_lead_id').value = id; $('ldNotesCode').textContent = '#' + id;
            $('note_text').value = ''; $('note_followup').value = '';
            api('GET', URL.base + '/' + id + '/notes').then(function (d) { renderNotes(d.notes || []); openM('ldNotesModal'); });
        });
    });
    $('ldAddNote').addEventListener('click', function () {
        var note = $('note_text').value.trim();
        if (!note) { alert('Please write a note before saving.'); return; }
        api('POST', URL.base + '/' + $('notes_lead_id').value + '/notes', { note: note, next_followup_date: $('note_followup').value || null })
            .then(function (d) { if (d._ok && d.success) { location.reload(); } else { alert(errText(d)); } });
    });
})();
</script>
