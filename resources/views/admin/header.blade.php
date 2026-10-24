<!-- fixed-top-->

<div class="row d-none">
    <div class="col-10">

        @if(session('success'))
            <div class="alert alert-info alert-dismissible fade in">
                <a href="javascript:void(0);" class="close" data-dismiss="alert">&times;</a>
                <strong>Success!</strong> {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade in">
                <a href="javascript:void(0);" class="close" data-dismiss="alert">&times;</a>
                <strong>Error!</strong> {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div>
</div>

<!-- fixed-top-->

<div id='cssmenu'>
    <ul class="pt-0">

        {{-- DASHBOARD --}}
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa-solid fa-gauge"></i> Dashboard
            </a>
        </li>



        {{-- CONTENT MANAGEMENT --}}
        <li class="{{ request()->routeIs(
    'admin.page-heroes.*',
    'admin.careers.*',
    'admin.faqs.*',
    'admin.blogs.*',
    'admin.pages.*',
    'admin.kb-categories.*',
    'admin.kb-articles.*',
) ? 'active' : '' }}">
            <a href="#"><i class="fa-solid fa-file-lines"></i> Content Management</a>
            <ul>
                <li><a href="{{ route('admin.page-heroes.index') }}">Page Hero Sections</a></li>
                <li><a href="{{ route('admin.faqs.index') }}">FAQ</a></li>
                <li><a href="{{ route('admin.blogs.index') }}">Blog Management</a></li>
                <li><a href="{{ route('admin.kb-categories.index') }}">KB Categories</a></li>
                <li><a href="{{ route('admin.kb-articles.index') }}">Knowledge Base Articles</a></li>
                <li><a href="{{ route('admin.careers.index') }}">Career Openings</a></li>
                <li><a href="{{ route('admin.pages.index') }}">Dynamic Pages</a></li>
            </ul>
        </li>

        {{-- MARKETING & SETTINGS --}}
        <li class="{{ request()->routeIs(
    'admin.coupons.*',
    'admin.seo.*',
    'admin.footer-settings.*'
) ? 'active' : '' }}">
            <a href="#"><i class="fa-solid fa-gear"></i> Marketing & Settings</a>
            <ul>
                <li><a href="{{ route('admin.seo.index') }}">SEO Management</a></li>


            </ul>
        </li>


        {{-- ENQUIRIES & APPLICATIONS --}}

        <li
            class="{{ request()->routeIs('admin.enquiries.*', 'admin.kb-enquiries.*', 'admin.career-applications.*') ? 'active' : '' }}">
            <a href="#">
                <i class="fa-solid fa-inbox"></i> Enquiries & Applications
            </a>
            <ul>
                <li>
                    <a href="{{ route('admin.enquiries.index') }}">Contact Enquiries</a>
                </li>
                <li>
                    <a href="{{ route('admin.kb-enquiries.index') }}">Knowledge Base Enquiries</a>
                </li>
                <li>
                    <a href="{{ route('admin.career-applications.index') }}">Job Applications
                    </a>
                </li>
            </ul>
        </li>

        {{-- Admin Setting --}}
        <li class="{{ request()->routeIs(
    'admin.settings.*',
    'admin.notifications.index',
    'admin.security.*'
) ? 'active' : '' }}">
            <a href="#"><i class="fa-solid fa-gear"></i> Settings</a>
            <ul>

                <li><a href="{{ route('admin.admin-setting.index', ['tab' => 'general']) }}">General Setting</a></li>
                <li><a href="{{ route('admin.admin-setting.index', ['tab' => 'smtp']) }}">SMTP</a></li>
                <li><a href="{{ route('admin.admin-setting.index', ['tab' => 'sms']) }}">SMS</a></li>
                <li><a href="{{ route('admin.settings.templates.index') }}">Template Settings</a></li>
                <li><a href="{{ route('admin.admin-setting.index', ['tab' => 'tracking']) }}">Tracking & Pixels</a></li>
                <li><a href="{{ route('admin.notifications.index') }}">Notification Centre</a></li>
                <li><a href="{{ route('admin.security.system-logs') }}">System Logs</a></li>
                <li><a href="{{ route('admin.redirect-settings.index') }}">Re-Direction Setting</a></li>
            </ul>
        </li>

    </ul>
</div>