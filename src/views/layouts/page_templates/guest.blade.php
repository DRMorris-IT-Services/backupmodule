@include('backupmodule::layouts.navbars.navs.guest')

<div class="wrapper wrapper-full-page ">
    <div class="full-page section-image" filter-color="black" data-image="{{ asset('paper') . '/' . ($backgroundImagePath ?? "img/bg/275618-hd-background-1920x1080-hd.jpg") }}">
        @yield('content')
        @include('backupmodule::layouts.footer')
    </div>
</div>
