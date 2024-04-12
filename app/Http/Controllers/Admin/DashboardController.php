<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;

class DashboardController extends Controller
{
    public function home()
    {
        $restaurants = Restaurant::count();
        $availableCount = Restaurant::where('status', 'available')->count();
        $outofstackCount = Restaurant::where('status', 'outofstack')->count();

        return view('admin.dashboard.default', compact('restaurants', 'availableCount', 'outofstackCount'));
    }
}

