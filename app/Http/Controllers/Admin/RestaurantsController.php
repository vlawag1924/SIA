<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Restaurant;


class RestaurantsController extends Controller
{
    public function default()
    {
        $restaurants = Restaurant::orderBy('id', 'ASC')->paginate(20);

        return view('admin.restaurants.default', [
            'pagetitle' => 'Restaurant ',
            'title' => 'Restaurant  | Admin',
            'restaurants' => $restaurants
        ]);
    }
    

    public function create()
    {
        return view('admin.restaurants.create', [
            'pagetitle' => 'Restaurant ',
            'title' => 'Restaurant  | Admin'
        ]);
    }

    public function view(Request $request)
    {
        $restaurant = Restaurant::find($request->id);

        return view('admin.restaurants.view', [
            'pagetitle' => 'View',
            'title' => 'View | Admin',
            'restaurant' => $restaurant
        ]);
    }
    
    public function delete($id)
    {
        $restaurant = Restaurant::find($id);

        if ($restaurant) {
            $restaurant->delete();
            return redirect()->route('restaurants.default')->with('success', 'Restaurant deleted successfully');
        } else {
            return redirect()->route('restaurants.default')->with('error', 'Restaurant not found');
        }
    }

    public function edit(Request $request)
    {
        $restaurant = Restaurant::find($request->id);

        return view('admin.restaurants.edit', [
            'pagetitle' => 'Edit',
            'title' => 'Edit | Admin',
            'restaurant' => $restaurant
        ]);
    }

    public function update(Request $request)
    {
        $storeRestaurants = Restaurant::find($request->id);
        $storeRestaurants->name_of_order = $request->name_of_order;
        $storeRestaurants->customer = $request->customer;
        $storeRestaurants->description = $request->description;
        $storeRestaurants->address = $request->address;
        $storeRestaurants->contact_number = $request->contact_number;
        $storeRestaurants->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $target_dir = "images/restaurants/";
            $target_file = $target_dir . uniqid() . '_' . basename($image->getClientOriginalName());
            $image->move($target_dir, $target_file);
            $storeRestaurants->img = $target_file;
        }

        if ($storeRestaurants->save()) {
            return redirect()->route('restaurants.default');
        }
    }

    public function save(Request $request)
    {
        $saveRestaurants = new Restaurant;
        $saveRestaurants->name_of_order = $request->name_of_order;
        $saveRestaurants->customer = $request->customer;
        $saveRestaurants->description = $request->description;
        $saveRestaurants->address = $request->address;
        $saveRestaurants->contact_number = $request->contact_number;
        $saveRestaurants->status = $request->status;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $target_dir = "images/restaurants/";
            $target_file = $target_dir . uniqid() . '_' . basename($image->getClientOriginalName());
            $image->move($target_dir, $target_file);
            $saveRestaurants->img = $target_file;
        }

        if ($saveRestaurants->save()) {
           return redirect()->route('restaurants.default');
    }
    
}


    public function searchtitle(Request $request)
    {
        $restaurant = Restaurant::where('title', $request->title)->first();
        return json_encode($restaurant);
    }
}


