<style>
:root {
    --bg:            #f1f2f4;
    --surface:       #ffffff;
    --border:        #e3e5e8;
    --text-primary:  #202223;
    --text-secondary:#6d7175;
    --text-hint:     #8c9196;
    --accent:        #303d89;
    --accent-light:  #f0f1fc;
    --green:         #007a5e;
    --green-bg:      #e3f1ec;
    --red:           #b22222;
    --red-bg:        #fce8e8;
    --radius-sm:     8px;
    --radius-md:     12px;
    --shadow-card:   0 1px 3px rgba(0,0,0,.08), 0 0 0 1px var(--border);
    --font:          'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
}

.create-page, .list-page { background: var(--bg); padding: 24px 28px; min-height: 100vh; font-family: var(--font); color: var(--text-primary); }
.create-page *, .list-page * { box-sizing: border-box; }

/* Page header */
.page-header { display: flex; align-items: flex-start; justify-content: space-between; flex-wrap: wrap; gap: 12px; margin-bottom: 20px; }
.page-header h1 { font-size: 20px; font-weight: 650; color: var(--text-primary); margin: 0; }
.crumb { font-size: 12.5px; color: var(--text-hint); margin-top: 3px; }
.crumb a { color: var(--accent); text-decoration: none; }
.crumb a:hover { text-decoration: underline; }
.crumb span { margin: 0 5px; }

/* Alerts */
.form-errors { background: var(--red-bg); border: 1px solid #f2c4c4; color: var(--red); border-radius: var(--radius-sm); padding: 12px 16px; margin-bottom: 16px; font-size: 13px; }
.form-errors ul { margin: 0; padding-left: 18px; }
.flash-success { background: var(--green-bg); border: 1px solid #b9dccf; color: var(--green); border-radius: var(--radius-sm); padding: 12px 16px; margin-bottom: 16px; font-size: 13px; }

/* Buttons */
.btn-primary-dash { display: inline-flex; align-items: center; gap: 6px; background: var(--accent); color: #fff !important; border: none; border-radius: var(--radius-sm); padding: 8px 18px; font-size: 13px; font-weight: 600; cursor: pointer; text-decoration: none !important; font-family: var(--font); transition: background .15s; box-shadow: 0 1px 3px rgba(48,61,137,.25); white-space: nowrap; }
.btn-primary-dash:hover:not(:disabled) { background: #252f70; }
.btn-primary-dash:disabled { opacity: .65; cursor: not-allowed; }
.btn-secondary-dash { display: inline-flex; align-items: center; gap: 6px; background: var(--surface); color: var(--text-primary) !important; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 8px 18px; font-size: 13px; font-weight: 500; text-decoration: none !important; font-family: var(--font); transition: background .15s; cursor: pointer; }
.btn-secondary-dash:hover { background: var(--bg); }

/* Two-column layout */
.create-layout { display: grid; grid-template-columns: 1fr 300px; gap: 20px; align-items: start; }
@media(max-width:900px) { .create-layout { grid-template-columns: 1fr; } }

/* Section card */
.section-card { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius-md); box-shadow: var(--shadow-card); overflow: hidden; margin-bottom: 16px; }
.section-card-header { padding: 14px 20px; border-bottom: 1px solid var(--border); background: #fafafa; }
.section-card-header h5 { font-size: 13px; font-weight: 650; color: var(--text-primary); margin: 0; letter-spacing: .01em; }
.section-card-body { padding: 20px; }

/* Form fields */
.field-group { margin-bottom: 16px; }
.field-group:last-child { margin-bottom: 0; }
.field-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
@media(max-width:600px) { .field-row { grid-template-columns: 1fr; } }
.field-label { display: block; font-size: 12px; font-weight: 600; color: var(--text-secondary); letter-spacing: .03em; text-transform: uppercase; margin-bottom: 6px; }
.field-label .req { color: var(--red); margin-left: 2px; }
.field-input, .field-textarea { width: 100%; border: 1px solid var(--border); border-radius: var(--radius-sm); padding: 0 12px; font-size: 13.5px; color: var(--text-primary); background: var(--surface); outline: none; transition: border-color .15s, box-shadow .15s; font-family: var(--font); }
.field-input { height: 38px; }
.field-textarea { padding: 10px 12px; resize: vertical; }
.field-input:focus, .field-textarea:focus { border-color: var(--accent); box-shadow: 0 0 0 3px rgba(48,61,137,.12); }
.field-hint { font-size: 11.5px; color: var(--text-hint); margin-top: 4px; }

/* Slug prefix */
.slug-wrap { display: flex; }
.slug-prefix { display: inline-flex; align-items: center; padding: 0 10px; background: var(--bg); border: 1px solid var(--border); border-right: none; border-radius: var(--radius-sm) 0 0 var(--radius-sm); font-size: 12px; color: var(--text-hint); white-space: nowrap; }
.slug-wrap .field-input { border-radius: 0 var(--radius-sm) var(--radius-sm) 0; }

/* Toggle rows */
.toggle-row { display: flex; align-items: center; justify-content: space-between; padding: 12px 0; border-bottom: 1px solid var(--bg); }
.toggle-row:last-child { border-bottom: none; padding-bottom: 0; }
.toggle-row:first-child { padding-top: 0; }
.toggle-label { font-size: 13px; font-weight: 500; color: var(--text-primary); }
.toggle-sub   { font-size: 11.5px; color: var(--text-hint); margin-top: 2px; }
.toggle-switch { position: relative; width: 38px; height: 22px; flex-shrink: 0; }
.toggle-switch input { opacity: 0; width: 0; height: 0; position: absolute; }
.toggle-track { position: absolute; inset: 0; background: var(--border); border-radius: 22px; cursor: pointer; transition: background .2s; }
.toggle-track::after { content:''; position:absolute; left:3px; top:3px; width:16px; height:16px; background:#fff; border-radius:50%; transition:transform .2s; box-shadow:0 1px 3px rgba(0,0,0,.2); }
.toggle-switch input:checked + .toggle-track { background: var(--accent); }
.toggle-switch input:checked + .toggle-track::after { transform: translateX(16px); }

/* Action bar */
.action-bar { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius-md); box-shadow: var(--shadow-card); padding: 14px 20px; display: flex; align-items: center; justify-content: flex-end; gap: 10px; margin-top: 20px; }

/* List table */
.list-card { background: var(--surface); border: 1px solid var(--border); border-radius: var(--radius-md); box-shadow: var(--shadow-card); overflow: hidden; }
.data-table { width: 100%; border-collapse: collapse; }
.data-table thead tr { background: #fafafa; border-bottom: 1px solid var(--border); }
.data-table thead th { padding: 10px 16px; font-size: 11px; font-weight: 650; text-transform: uppercase; letter-spacing: .05em; color: var(--text-secondary); white-space: nowrap; text-align: left; }
.data-table tbody tr { border-bottom: 1px solid var(--border); transition: background .12s; }
.data-table tbody tr:last-child { border-bottom: none; }
.data-table tbody tr:hover { background: #fafbfc; }
.data-table td { padding: 13px 16px; font-size: 13px; color: var(--text-primary); vertical-align: middle; }
.id-chip { display: inline-block; background: var(--bg); border: 1px solid var(--border); border-radius: 6px; padding: 2px 8px; font-size: 11.5px; font-family: 'SF Mono','Fira Mono',monospace; color: var(--text-secondary); }
.row-title { font-size: 13.5px; font-weight: 600; color: var(--text-primary); line-height: 1.4; }
.row-sub { font-size: 12px; color: var(--text-hint); margin-top: 2px; }

/* Pills */
.pill { display: inline-flex; align-items: center; gap: 5px; padding: 3px 10px; border-radius: 20px; font-size: 11.5px; font-weight: 600; white-space: nowrap; }
.pill::before { content:''; width:6px; height:6px; border-radius:50%; flex-shrink:0; }
.pill-active   { background: var(--green-bg); color: var(--green); }
.pill-active::before   { background: var(--green); }
.pill-inactive { background: var(--red-bg); color: var(--red); }
.pill-inactive::before { background: var(--red); }
.pill-type { background: var(--accent-light); color: var(--accent); }
.pill-type::before { background: var(--accent); }

/* Action buttons */
.action-btn { display: inline-flex; align-items: center; justify-content: center; width: 30px; height: 30px; border-radius: var(--radius-sm); border: 1px solid var(--border); background: var(--surface); color: var(--text-secondary); cursor: pointer; text-decoration: none; transition: all .15s; font-size: 12px; }
.action-btn:hover        { background: var(--bg); color: var(--text-primary); border-color: #c9cccf; }
.action-btn.edit:hover   { background: var(--accent-light); color: var(--accent); border-color: rgba(48,61,137,.25); }
.action-btn.danger:hover { background: var(--red-bg); color: var(--red); border-color: #f5c0c0; }

/* Empty state */
.empty-state { text-align: center; padding: 56px 24px; }
.empty-icon-wrap { width: 56px; height: 56px; border-radius: 50%; background: var(--accent-light); margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; color: var(--accent); font-size: 22px; }
.empty-state h6 { font-size: 14px; font-weight: 650; color: var(--text-primary); margin: 0 0 6px; }
.empty-state p  { font-size: 13px; color: var(--text-hint); margin: 0 0 20px; }

/* Pagination */
.pagination-bar { padding: 14px 20px; border-top: 1px solid var(--border); }
.pagination-bar .pagination { margin: 0; }
.pagination-bar .page-link  { border-color: var(--border); color: var(--accent); font-size: 13px; border-radius: var(--radius-sm) !important; margin: 0 2px; }
.pagination-bar .page-item.active .page-link { background: var(--accent); border-color: var(--accent); color: #fff; }

@media(max-width:768px) { .create-page, .list-page { padding: 16px; } }
</style>