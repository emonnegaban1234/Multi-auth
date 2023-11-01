<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    function dashboardlogin(){
        return view('dashboard.admin_dashboard');
    }
}
