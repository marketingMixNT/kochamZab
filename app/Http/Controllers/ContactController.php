<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.contact.index",compact('totalAttractions', 'totalApartments', 'totalRestaurants', 'totalPosts'));
    }
}
