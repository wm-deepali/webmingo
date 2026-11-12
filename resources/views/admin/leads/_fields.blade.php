{{-- Shared lead fields. $p = id prefix ('add_' or 'lead_'). Ids: {$p}full_name, {$p}mobile, ... --}}
@php
    $sel = function ($id, $label, $options) use ($p) {
        $html = '<div class="field-group"><label class="field-label">' . $label . '</label><select class="field-select" id="' . $p . $id . '"><option value="">-- Select --</option>';
        foreach ($options as $o) { $html .= '<option value="' . e($o) . '">' . e($o) . '</option>'; }
        return $html . '</select></div>';
    };
@endphp

<div class="ld-section">
    <p class="ld-section-title">Contact details</p>
    <div class="ld-grid">
        <div class="field-group"><label class="field-label">Client Name <span class="ld-req">*</span></label>
            <input class="field-input" id="{{ $p }}full_name"></div>
        <div class="field-group"><label class="field-label">Mobile Number <span class="ld-req">*</span></label>
            <input class="field-input" id="{{ $p }}mobile" maxlength="10" inputmode="numeric"></div>
        <div class="field-group"><label class="field-label">Email ID</label>
            <input class="field-input" type="email" id="{{ $p }}email"></div>
        <div class="field-group"><label class="field-label">Website</label>
            <input class="field-input" id="{{ $p }}website"></div>
        <div class="field-group"><label class="field-label">Business Name</label>
            <input class="field-input" id="{{ $p }}business_name"></div>
        <div class="field-group">
            <label class="field-label">Business Entity Type <span class="ld-req" id="{{ $p }}entity_star" style="display:none">*</span></label>
            <select class="field-select" id="{{ $p }}entity_type">
                <option value="">-- Select --</option>
                @foreach (\App\Support\LeadOptions::ENTITY_TYPES as $o)<option value="{{ $o }}">{{ $o }}</option>@endforeach
            </select>
            <div class="ld-alert" id="{{ $p }}entity_alert">Please select Entity Type</div>
        </div>
        <div class="field-group"><label class="field-label">GST Number</label>
            <input class="field-input" id="{{ $p }}gst_number" placeholder="Optional"></div>
        <div class="field-group"><label class="field-label">CIN / Regd. Number</label>
            <input class="field-input" id="{{ $p }}cin_number" placeholder="Optional"></div>
    </div>
</div>

<div class="ld-section">
    <p class="ld-section-title">Requirement</p>
    <div class="ld-grid">
        {!! $sel('service_type', 'Service Type', \App\Support\LeadOptions::SERVICE_TYPES) !!}
        {!! $sel('industry', 'Industry', \App\Support\LeadOptions::INDUSTRIES) !!}
        {!! $sel('lead_type', 'Lead Type', \App\Support\LeadOptions::LEAD_TYPES) !!}
        <div class="field-group ld-full"><label class="field-label">Requirement Details</label>
            <textarea class="field-input" id="{{ $p }}details" rows="3"></textarea></div>
    </div>
</div>

<div class="ld-section">
    <p class="ld-section-title">Location</p>
    <div class="ld-grid">
        <div class="field-group ld-full"><label class="field-label">Address</label>
            <input class="field-input" id="{{ $p }}address"></div>
        <div class="field-group"><label class="field-label">State</label>
            <select class="field-select" id="{{ $p }}state"><option value="">-- Select State --</option></select></div>
        <div class="field-group"><label class="field-label">City</label>
            <select class="field-select" id="{{ $p }}city"><option value="">-- Select City --</option></select></div>
        <div class="field-group"><label class="field-label">Pin Code</label>
            <input class="field-input" id="{{ $p }}pincode" maxlength="6" inputmode="numeric" placeholder="Optional"></div>
    </div>
</div>