<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use DB;


class PermissionController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // function __construct()
    // {
    //      $this->middleware('permission:permission_list|permission_create|permission_edit|permission_delete', ['only' => ['index','store']]);
    //      $this->middleware('permission:permission_create', ['only' => ['create','store']]);
    //      $this->middleware('permission:permission_edit', ['only' => ['edit','update']]);
    //      $this->middleware('permission:permission_delete', ['only' => ['destroy']]);
    // }
    
    public function index()
    {
        $permissions=Permission::get();
        return view('permission.index',compact('permissions'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {        
        DB::table('permissions')->insert([        
            'name'=>$request->name,
            'guard_name'=>$request->guard_name,
                                  
        ]);
        return back()->with('add');
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
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $permission= DB::table('permissions')->where('id',$id)->first();
        return view('permission.index',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('permissions')->where('id',$request->id)->update([       
            'name'=>$request->name,            
        ]);    
        return redirect()->route('permission.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("permissions")->where('id',$id)->delete();
        return redirect()->route('permission.index')
                        ->with('success','Permission deleted successfully');
    }
}
