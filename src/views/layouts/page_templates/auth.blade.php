<div class="wrapper">
    @include('backupmodule::layouts.navbars.auth')

    <div class="main-panel bg-dark">
       
        
       
        
        @include('backupmodule::layouts.navbars.navs.auth')
        @yield('content')
        @include('backupmodule::layouts.footer')

    </div>
</div>