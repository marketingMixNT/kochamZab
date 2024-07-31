<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.about.index",compact("totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }

    public function zab()
    {

        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.about.zab", compact("totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }
    public function history()
    {

        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.about.history", compact("totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }

    public function poronin()
    {

        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.about.poronin", compact("totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }
    public function association()
    {

        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.about.association", compact("totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }
    public function zwiazek()
    {

        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.about.zwiazek", compact("totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }
    public function band()
    {

        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.about.band", compact("totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }
}
