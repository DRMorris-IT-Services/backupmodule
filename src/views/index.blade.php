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
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">New Client</a>
        </li>
        
        
        
          </ul>


       
        
    </div>
@endsection

@push('scripts')
    
@endpush