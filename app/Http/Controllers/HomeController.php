<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Slide;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {


        $slides = Slide::orderBy('sort', 'asc')->get();

        $posts = Post::published()->select('id', 'title', 'slug', 'thumbnail','content', 'published_at')
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        $attractions = Attraction::select('id', 'title', 'slug', 'thumbnail')->orderBy('sort', 'asc')->take(3)->get();
        $apartments = Apartment::select('id', 'title', 'slug', 'thumbnail', 'desc')->orderBy('sort', 'asc')->take(3)->get();
        $restaurants = Restaurant::select('id', 'title', 'slug', 'thumbnail', 'desc')->orderBy('sort', 'asc')->take(3)->get();

        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();



        return view("pages.home.index", compact("slides", "posts", "attractions", "apartments", "restaurants", "totalAttractions", "totalApartments", "totalRestaurants", "totalPosts"));
    }
}
