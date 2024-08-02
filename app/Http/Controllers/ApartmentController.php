<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {

        $apartments = Apartment::select('id', 'title', 'slug', 'thumbnail', 'desc')->orderBy('sort', 'asc')->paginate(6);
        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.apartment.index", compact("apartments", "totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }

    public function show($slug)
    {
        $apartment = Apartment::with('socials', 'posts')->where('slug->pl', $slug)->firstOrFail();

        $otherApartments = Apartment::orderByDesc('created_at')->take(4)->get();

        $filteredApartments = $otherApartments->filter(function ($a) use ($apartment) {
            return $a->id !== $apartment->id;
        });

        $filteredApartments =  $filteredApartments->take(3);

        return view('pages.apartment.show', compact('apartment', 'filteredApartments'));
    }
}
