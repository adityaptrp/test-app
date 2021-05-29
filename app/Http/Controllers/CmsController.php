<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CmsController extends Controller
{
    public function dashboard()
    {
        return view('cms.dashboard');
    }

    public function orders()
    {
        return view('cms.orders.index');
    }
    
    public function ordersChart()
    {
        return view('cms.orders.chart');
    }

    public function users()
    {
        return view('cms.users.index', [
            'users' => User::latest()->get(),
        ]);
    }
}
