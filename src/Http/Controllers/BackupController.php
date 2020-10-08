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

        $backups = DB::table('backuplogs')->orderby('created_at','DESC')->paginate(15);

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
    public function destroy($id, $url)
    {
        //
        $storage = storage_path("app/public");
        exec("unlink $storage/$url");

        DB::update('delete from backuplogs where backup_id = ?',[$id]);
        
        return redirect('backup')->withDelete(__('Backup successfully Deleted.'));


    }

    public function delete($id, $url)
    {
        return view('backupmodule::delete',['id' => $id, 'url' => $url]);
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

        $storage = storage_path("app/public");
        $backup = storage_path("/");
        //$storage = "/tmp";

        shell_exec("mysqldump -h'$host' -u'$user' -p'$pass' -P'$port' --databases $dbase > $storage/$file_id.sql");
        
        exec("zip -r $storage/$file_id.zip $backup");
        exec("unlink $storage/$file_id.sql");

        DB::table('backuplogs')->insert(
             ['backup_id' => Str::random(60),'backup_filename' => "$file_id.zip", 'backup_url' => "$storage/$file_id.zip", 'created_at' => $todayDate]
         );
        
         return redirect('/backup')->withStatus('The Backup has been SUCCESSFUL.  The backup will now appear in the list below');

         

        
    }

}
