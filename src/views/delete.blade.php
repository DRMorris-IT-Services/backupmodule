
@extends('backupmodule::layouts.app', [
    'class' => '',
    'elementActive' => 'backup'
])

@section('content')
    <div class="content">
    @include('backupmodule::layouts.alerts')
    
    <form class="col-md-12" action="{{ route('backup.del.action',['id' => $id,'file' => $url]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
  <h2 class="text-white"><i class="fa fa-lg fa-warning text-warning"></i> <b><u>DELETE</u></b> Backup</h2>
      <div class="row">
                <div class="col-md-12 text-white">
                    <h3><i class="fa fa-warning text-danger" ></i> WARNING!!</h3>
                    <h5>You are going to remove this backup, are you sure?</h5>
                    <h5>This action can <b><u>NOT BE UNDONE!</u></b></h5>
                        
                   
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-danger">DELETE</button>
                    </div>
                            
                          
                </div>
      </div>
    </form>
  



       
        <!-- END OF CONTENT -->
    </div>
@endsection

@push('scripts')
    
@endpush
