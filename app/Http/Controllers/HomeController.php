<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ipt;
use App\Models\User;
use App\Models\Useript;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
       
        $hr=User::role('HR')->count();
        $std=User::role('student')->count();
        $users=User::count();
        $ipt=Ipt::count();
        $accept=Useript::where('remark','Accept')->count();
        $email = Auth::user()->email;
        $hd = Useript::with('user','ipt')->where('user_id',$email)->count();
        return view('home',compact('users','hr','ipt','std','accept','hd'));
    }
}
