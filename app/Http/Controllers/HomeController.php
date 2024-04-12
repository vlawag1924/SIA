<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Restaurant;

class HomeController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::paginate(5); 

        return view('home', ['restaurants' => $restaurants]);

    }

}

