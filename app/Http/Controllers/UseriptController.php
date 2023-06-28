<?php

namespace App\Http\Controllers;

use App\Models\Useript;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Ipt;
use Illuminate\Support\Facades\Auth;


class UseriptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$email = Auth::user()->email;
        // $hrs= Ipt::where('hr', $email)->first();
        $users = Useript::where('hr', Auth::user()->email)->with('user','ipt')->get();
        return view('ipt.manage',compact('users'))->with('i');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Useript::create([
            'user_id' => $request->user_id,
             'ipt_id' => $request->ipt_id,
             'remark' => $request->remark,
             'hr' => $request->hr                  
 
         ]);
        
         return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Useript  $useript
     * @return \Illuminate\Http\Response
     */
    public function show(Useript $useript)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Useript  $useript
     * @return \Illuminate\Http\Response
     */
    public function edit(Useript $useript)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Useript  $useript
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Useript $useript)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Useript  $useript
     * @return \Illuminate\Http\Response
     */
    public function destroy(Useript $useript)
    {
        //
    }
    public function remark($id)
    {
        $getStatus = Useript::select('remark')->where('id',$id)->first();
        if($getStatus->remark=='Accept'){
            $remark = 'Reject';      
        }else{
            $remark = 'Accept';
        }
        Useript::where('id',$id)->update(['remark'=>$remark]);
        return redirect()->back();
    }
    public function approved(){    
       
        $pd = Useript::where('remark','Accept')->get();
        $id = Auth::user()->id;
        $users = Useript::with('user','ipt')->where('user_id',$id)->get();
        
        return view('ipt.approved', compact('users','pd'))->with('i');
      
       
   }





}
