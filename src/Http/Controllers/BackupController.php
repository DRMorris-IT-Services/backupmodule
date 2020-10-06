<?php

//namespace App\Http\Controllers;
namespace duncanrmorris\backupmodule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BackupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $backups = DB::table('backuplogs')->orderby('created_at','ASC')->paginate(15);

        return view('backupmodule::index', ['backups' => $backups]);
    }

    public function list()
    {
        //

        return view('backupmodule::list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backupmodule::new');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function backup()
    {
     
        $todayDate = date("Y-m-d H:i:s");
        $file_id = Str::uuid();

        $host = env('DB_HOST');
        $user = env('DB_USERNAME');
        $pass = env('DB_PASSWORD');
        $port = env('DB_PORT');
        $dbase = env('DB_DATABASE');

        $storage = storage_path("app/public/backups");
        //$storage = "/tmp";

        shell_exec("mysqldump -h'$host' -u'$user' -p'$pass' -P'$port' --databases $dbase > $storage/$file_id.sql");
        
        

        DB::table('backuplogs')->insert(
             ['backup_id' => Str::random(60),'backup_filename' => $file_id, 'backup_url' => "$storage/$file_id.sql", 'created_at' => $todayDate]
         );
        
         return redirect('/backup')->withStatus('The Backup has Started.  Once completed, it will appear in the list below');

         

        
    }

}
