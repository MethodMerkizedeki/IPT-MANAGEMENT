<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ipt;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

class IptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $email = Auth::user()->email;
        $pd = Ipt::where('hr', $email)->get();
        return view('ipt.index',compact('pd'))->with('i');;
        
        
      
    }
    public function iptlist(Request $request)
    {
        // if(isset($_GET['query'])){
        //     $search_text = $_GET['query']; 
        //     $pd = DB::table('ipts')->where('region','category','LIKE','%'.$search_text.'%')->get();
        //     return view('ipt.iptlist',['pd'=>$pd]);
        // }
        // else{
            
        //      $pd = Ipt::get();
        //     return view('ipt.iptlist',compact('pd'));
        // }
        $region = $request->input('region');
        $category = $request->input('category');
        
        $pd = Ipt::where(function ($query) use ($region, $category) {
            if($region) {
                $query->where('region', 'like', '%' . $region . '%');
            }
            if($category) {
                $query->orWhere('category', 'like', '%' . $category . '%');
            }
            
        })->get();
        return view('ipt.iptlist',compact('pd'))->with('i');
      
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
        Ipt::create([
           'description' => $request->description,
            'region' => $request->region,
            'category' => $request->category,
            'vacancy' => $request->vacancy,
            'status' => $request->status,   
            'hr'=>$request->hr        

        ]);
       
        return back();
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
        $pt = Ipt::find($id);          
        return view('ipt.edit',compact('pt'));
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
        DB::table('ipts')->where('id', $request->id)->update([
           
            'description' => $request->description,
            'region' => $request->region,
            'category' => $request->category,
            'vacancy' => $request->vacancy,
            'status' => $request->status,   
            'hr'=>$request->hr 
            
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("ipts")->where('id',$id)->delete();
        return redirect()->route('ipt.index');
    }

    public function status($id)
    {
        $getStatus = Ipt::select('status')->where('id',$id)->first();
        if($getStatus->status=='Apply'){
            $status = 'Applied';      
        }else{
            $status = 'Apply';
        }
        Ipt::where('id',$id)->update(['status'=>$status]);
        return redirect()->back();
    }
    public function remark($id)
    {
        $getStatus = Ipt::select('remark')->where('id',$id)->first();
        if($getStatus->remark=='Accept'){
            $remark = 'Reject';      
        }else{
            $remark = 'Accept';
        }
        Ipt::where('id',$id)->update(['remark'=>$remark]);
        return redirect()->back();
    }

    
}