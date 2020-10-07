<div class="sidebar" data-color="black" data-active-color="success">
    <div class="logo">
       
            <div class="logo-image-small">
                <h2 class="text-white text-center">BACKUP MODULE</h2>
                <h6 class="text-white text-center">Version 1.0</h6>
            </div>
        
            </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="fa fa-home"></i>
                    <p>{{ __('Home') }}</p>
                </a>
            </li>

            <li >
                <a href="{{ route('backup') }}">
                    <i class="fa fa-list"></i>
                    <p>{{ __('Backup List') }}</p>
                </a>
            </li>

            <li >
                <a href="{{ route('backup.new') }}">
                    <i class="fa fa-download"></i>
                    <p>{{ __('Create Backup') }}</p>
                </a>
            </li>
            
        
            

            <hr class="bg-white">

            <li class="{{ $elementActive == 'release-notes' ? 'active' : '' }}">
                <a href="/releasenotes">
                    <span class="sidebar-mini-icon"><i class="fa fa-info"></i></span>
                    <span class="sidebar-normal">{{ __(' Release Notes ') }}</span>
                </a>
            </li>

           

            
            
        </ul>
    </div>
</div>