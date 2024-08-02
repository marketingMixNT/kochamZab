<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {

        $restaurants = Restaurant::select('id', 'title', 'slug', 'thumbnail', 'desc', )->orderBy('sort','asc')->paginate(6);
        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.restaurant.index", compact("restaurants", "totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }


    public function show($slug)
    {
        $restaurant = Restaurant::with('socials', 'posts')->where('slug->pl', $slug)->firstOrFail();

        $otherRestaurants = Restaurant::orderByDesc('created_at')->take(4)->get();

        $filteredRestaurants = $otherRestaurants->filter(function ($r) use ($restaurant) {
            return $r->id !== $restaurant->id;
        });

        $filteredRestaurants =  $filteredRestaurants->take(3);

        return view('pages.restaurant.show', compact('restaurant', 'filteredRestaurants'));
    }
}
