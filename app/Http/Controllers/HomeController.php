<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function admin_dashboard()
    {
        return view('admin.dashboard');
    }
    public function coordinator_dashboard()
    {
        return view('coordinator.dashboard');
    }
    public function teacher_dashboard()
    {
        return view('teacher.dashboard');
    }
    public function main_dealer_dashboard()
    {
        return view('main_dealer.dashboard');
    }
    public function sub_dealer_dashboard()
    {
        return view('sub_dealer.dashboard');
    }
    public function sales_rep_dashboard()
    {
        return view('sales_rep.dashboard');
    }
}