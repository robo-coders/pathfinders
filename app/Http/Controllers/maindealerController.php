<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\user;
use Illuminate\Support\Facades\DB;
use App\role_user;
use App\users_rel;
class maindealerController extends Controller
{
    public function my_team(){
        $my_id = auth::user()->id;
        $views = user::with('user_rels')->whereHas('user_rels', function($query) use ($my_id) {
            $query->where('rel_id', $my_id);
        })->get();
    	return view('main_dealer.my_team',compact('views'));

    }
}
