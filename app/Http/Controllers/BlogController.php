<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Apartment;
use App\Models\Attraction;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {

        $posts = Post::select('id', 'title', 'slug', 'thumbnail','content' ,'published_at')->paginate(6);
        $totalAttractions = Attraction::count();
        $totalApartments = Apartment::count();
        $totalRestaurants = Restaurant::count();
        $totalPosts = Post::count();

        return view("pages.blog.index", compact("posts", "totalAttractions", "totalApartments", "totalRestaurants", 'totalPosts'));
    }

    public function show($slug)
    {
        $post = Post::where('slug->pl', $slug)->firstOrFail();

        $latestPosts = Post::published()->orderByDesc('published_at')->take(4)->get();

        $filteredPosts = $latestPosts->filter(function ($p) use ($post) {
            return $p->id !== $post->id;
        });

        $filteredPosts = $filteredPosts->take(3);

        return view('pages.blog.show', compact('post', 'filteredPosts'));
    }
}
