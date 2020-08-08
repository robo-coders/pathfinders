<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use Illuminate\Support\Facades\DB;
use App\role_user;
use App\users_rel;
class coordinatorController extends Controller
{
    public function index(){
    }
    
    public function my_team(){
        $my_id = auth::user()->id;
        $views = user::with('user_rels')->whereHas('user_rels', function($query) use ($my_id) {
            $query->where('rel_id', $my_id);
        })->get();

        // $user = Auth::user()->id;
        // $fetching = DB::table('users')
        // ->join('users_rels', 'users_rels.rel_id', '=', 'users.id')
        // ->join('users_rels as userRel', 'userRel.user_id', '=', 'users.id')
        // ->select('users.id','users.name','users_rels.user_id', 'users_rels.rel_id', 'users_rels.coupon_code')
        // // ->where('users.id', '=', $user)
        // ->get();
        // dd($fetching);
    
    	return view('coordinator.my_team',compact('views'));

    }
    
    public function sales_management(){
    	return view('coordinator.sales_management');

    }
    
    public function support(){
    	return view('coordinator.support');

    }

}
