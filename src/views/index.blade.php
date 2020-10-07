
@extends('backupmodule::layouts.app', [
    'class' => '',
    'elementActive' => 'backup'
])

@section('content')
    <div class="content">
    @include('backupmodule::layouts.alerts')
    
        
  <h2 class="text-white">Backups</h2>
      <div class="row">
                <div class="col-md-12 text-white">
                <table class="table">
                    <thead class="text-primary">
                      <tr>
                        <th>Filename</td>
                        <th>URL</th>
                        <th>Created</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($backups as $bk)
                      <tr>
                        <td>{{$bk->backup_filename}}</td>
                        <td>{{$bk->backup_url}}</td>
                        <td>{{$bk->created_at}}</td>
                        <td>
                        <a href="{{route('backup.del',['id' => $bk->backup_id,'file' => $bk->backup_filename])}}" ><button class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button></a>
                        </td>
                      </tr>
                    @endforeach

                    </tbody>
                  </table>
                  {{ $backups->links() }}
                            
                          
                </div>
      </div>
  



       
        <!-- END OF CONTENT -->
    </div>
@endsection

@push('scripts')
    
@endpush
