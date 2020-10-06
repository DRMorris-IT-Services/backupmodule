
@extends('layouts.app', [
    'class' => '',
    'elementActive' => 'backup'
])

@section('content')
    <div class="content">
    @include('layouts.alerts')
    
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">List</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Backup</a>
        </li>
        
        
        
          </ul>

   

          <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active col-md-12" id="home" role="tabpanel" aria-labelledby="home-tab">
        
  <h2 class="text-white">Backups</h2>
      <div class="row">
                <div class="col-md-12 text-white">
                    
                            
                          
                </div>
        </div>
  </div>

  

  <div class="tab-pane fade show  col-md-12" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    <h2 class="text-white">Create Backup</h2>

  </div>

  </div>

       
        <!-- END OF CONTENT -->
    </div>
@endsection

@push('scripts')
    
@endpush
