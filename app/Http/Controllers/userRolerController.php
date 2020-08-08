<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userRolerController extends Controller
{
    public function create(){
    	return view('users.registeration');
    }
    public function create_sub(){
    	return view('users.sub_coordinator');
    }
    public function create_main_dealer(){
    	return view('users.main_dealer');
    }
    public function create_sub_dealer(){
    	return view('users.sub_dealer');
    }
}
