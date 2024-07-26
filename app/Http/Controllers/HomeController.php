<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slide::orderBy('sort', 'desc')->get();
        $posts = Post::published()->orderBy('published_at', 'desc')->take(3)->get();
        $attractions = Attraction::orderBy('sort', 'desc')->take(3)->get();
        $apartments = Apartment::orderBy('sort', 'desc')->take(3)->get();
        $restaurants = Restaurant::orderBy('sort', 'desc')->take(3)->get();

        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.home.index", compact("slides","posts", "attractions", "apartments", "restaurants","totalAttractions","totalApartments","totalRestaurants","totalPosts"));
    }
}
