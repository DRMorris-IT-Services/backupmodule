
@extends('backupmodule::layouts.app', [
    'class' => '',
    'elementActive' => 'backup'
])

@section('content')
    <div class="content">
    @include('backupmodule::layouts.alerts')
         

    <h2 class="text-white">Create Backup</h2>
        <div class="row">
                <div class="col-md-12 text-white">
                    <p>To start the backup progress, click the "Backup Now" button below.</p>
                    <p>When the back has completed, your backup file will be avaliable in the backup list.</p>

                    <a href="{{route('backup.now')}}"><button class="btn btn-lg btn-success">BACKUP NOW</button></a>
                            
                          
                </div>
        </div>




       
        <!-- END OF CONTENT -->
    </div>
@endsection

@push('scripts')
    
@endpush
