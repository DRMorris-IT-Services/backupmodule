@extends('backupmodule::layouts.app', [
    'class' => '',
    'elementActive' => 'relesenotes'
])

@section('content')
    <div class="content">
    @include('backupmodule::layouts.alerts')

    <h2 class="text-white">Release Notes Version 1.0</h2>
      <div class="row">
                <div class="col-md-12 text-white">
                        <p>We are pleased to release our version 1.0 of the Backup Module.</p>

                        <h3>Introduction</h3>
                        <p>The Backup Module has been designed to be a bolt-on moudle for any Laravel Project.
                            This then allowing for quick and easy project builds.</p>

                        <h3>What's New</h3>
                        <p>Within this release we have included these great features:
                            <h5>Create Backup</h5>
                                <p>This allows you to create a new backup of your software.  Then store the completed backup in a .zip file for you to download.
                                    The backup process covers: <br>
                                    <ul><li>Backup of database</li>
                                        <li>Backup of /storage/app/public folder</li>
                                    </ul>
                                </p>
                        </p>

                </div>

      </div>
    </div>
@endsection