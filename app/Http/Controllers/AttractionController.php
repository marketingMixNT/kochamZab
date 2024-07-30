<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class AttractionController extends Controller
{
    public function index()
    {

        $attractions = Attraction::select('id', 'name', 'slug', 'thumbnail')->paginate(9);
        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.attraction.index", compact("attractions", "totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }

    public function show($slug)
    {
        $attraction = Attraction::with('socials', 'posts')->where('slug->pl', $slug)->firstOrFail();

        $otherAttractions = Attraction::orderByDesc('created_at')->take(4)->get();

        $filteredAttractions = $otherAttractions->filter(function ($a) use ($attraction) {
            return $a->id !== $attraction->id;
        });

        $filteredAttractions =  $filteredAttractions->take(3);

        return view('pages.attraction.show', compact('attraction', 'filteredAttractions'));
    }
}
