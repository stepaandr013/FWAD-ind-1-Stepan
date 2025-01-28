<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = "Autodoc | Home";
        $products = Product::paginate(3);
        return view('pages.index', compact('title', 'products'));
    }
    public function about()
    {
        $title = "Autodoc | About";
        return view('pages.about', compact('title'));
    }
    public function contacts()
    {
        $title = "Autodoc | Contacts";
        return view('pages.contact', compact('title'));
    }
    public function tuning()
    {
        $title = "Autodoc | Tuning";
        return view('pages.tuning', compact('title'));
    }
}
