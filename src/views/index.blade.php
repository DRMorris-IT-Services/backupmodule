
@extends('layouts.app')

@section('content')

<div class="container">
  @if (session('status'))
  <div class="alert alert-success" role="alert">
      {{ session('status') }}
  </div>
@endif

<div class="row justify-content-end">
  
<a href="{{route('backup.controls')}}"><i class="fa fa-cog text-info"></i></a>
  
</div>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">list</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Backup</a>
  </li>
  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h3>Backups</h3></div>

                        <div class="card-body">
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
                                <td>{{date('d/m/y H:i', strtotime($bk->created_at))}}</td>
                                <td>
                                <a href="{{route('backup.download', ['id' => $bk->backup_filename])}}" ><button class="btn btn-sm btn-outline-primary fa fa-download"></button></a>
                                  <button class="btn btn-sm btn-outline-danger fa fa-trash" data-toggle="modal" data-target="#del{{$bk->id}}"></button>
                                  
                                  <!-- MODAL DELETE CLIENT -->
                                  <form class="col-md-12" action="{{ route('backup.del.action',['id' => $bk->backup_id,'file' => $bk->backup_filename]) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')

                                  <div class="modal fade" id="del{{$bk->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle2" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                  <div class="modal-header bg-danger text-white">
                                  <h5 class="modal-title" id="exampleModalLongTitle">REMOVE Backup??</h5>
                                  </div>

                                            <div class="modal-body">
                                                
                                            <h3><i class="fa fa-warning" ></i> WARNING!!</h3>
                                            <h5>You are going to remove this backup, are you sure?</h5>
                                            <h5>This action can <b><u>NOT BE UNDONE!</u></b></h5>

                                            </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-outline-danger">DELETE</button>
                                        </div>
                                    
                                  </div>

                                  </div>
                                  </div>
                                  </form>

                                  <!-- END MODAL FOR DELETE CLIENT -->        

                                </td>
                              </tr>
                            @endforeach

                            </tbody>
                          </table>
                          {{ $backups->links() }}

                            
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

      <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>NEW Backup</h3></div>

                <div class="card-body">
                  
                    <p>To start the backup progress, click the "Backup Now" button below.</p>
                    <p>When the back has completed, your backup file will be avaliable in the backup list.</p>

                    <a href="{{route('backup.now')}}"><button class="btn btn-lg btn-success">BACKUP NOW</button></a>
                    
                </div>
            </div>
        </div>
    </div>

    </div>
  
</div>


@endsection

@push('scripts')
    
@endpush
