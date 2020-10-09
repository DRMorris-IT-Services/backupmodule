<?php

namespace duncanrmorris\backupmodule\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use App\User;

use duncanrmorris\backupmodule\App\backupcontrols;


class BackupcontrolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $users)
    {
        //

        return view('backupmodule::controls.list',['users' => $users->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(backupcontrols $backupcontrols, $id)
    {
        //
        backupcontrols::create([
            'user_id' => $id,
        ]);

        return back()->withStatus(__('Access Levels successfully updated.'));
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
     * @param  \App\backupcontrols  $backupcontrols
     * @return \Illuminate\Http\Response
     */
    public function show(backupcontrols $backupcontrols, User $user, $id)
    {
        //
        return view('backupmodule::controls.view',[
            'count' => $backupcontrols->where('id',$id)->count(),
            'controls' => $backupcontrols->where('id',$id)->get(),
            'user' => $user->where('id',$id)->get()
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\backupcontrols  $backupcontrols
     * @return \Illuminate\Http\Response
     */
    public function edit(backupcontrols $backupcontrols, User $user, $id)
    {
        //
        return view('backupmodule::controls.edit',[
            'count' => $backupcontrols->where('id',$id)->count(),
            'controls' => $backupcontrols->where('id',$id)->get(),
            'user' => $user->where('id',$id)->get()
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\backupcontrols  $backupcontrols
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, backupcontrols $backupcontrols, $id)
    {
        //

        backupcontrols::where('id',$id)
        ->update([
        'backup_view' => $request['view'],
        'backup_add' => $request['new'],
        'backup_download' => $request['download'],
        'backup_del' => $request['del'],
        ]);
        return back()->withStatus(__('Access Levels successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\backupcontrols  $backupcontrols
     * @return \Illuminate\Http\Response
     */
    public function destroy(backupcontrols $backupcontrols)
    {
        //
    }
}
