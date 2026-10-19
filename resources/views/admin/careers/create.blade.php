@include('admin.top-header')

<div class="main-section">
    @include('admin.header')

    @include('admin.careers._styles')

    <div class="app-content content container-fluid">
        <div class="create-page">

            <!-- Page header -->
            <div class="page-header">
                <div>
                    <h1>Add Career</h1>
                    <div class="crumb">
                        <a href="{{ route('admin.dashboard') }}">Dashboard</a>
                        <span>›</span>
                        <a href="{{ route('admin.careers.index') }}">Manage Careers</a>
                        <span>›</span>
                        Add Career
                    </div>
                </div>
            </div>

            @if ($errors->any())
                <div class="form-errors">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="careerForm" method="POST" action="{{ route('admin.careers.store') }}">
                @csrf

                @include('admin.careers._form', ['career' => null])
            </form>

        </div>
    </div>
</div>

@include('admin.footer')e