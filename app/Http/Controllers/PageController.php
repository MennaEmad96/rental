<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function about()
    {
        return view("about");
    }
    public function blog()
    {
        return view("blog");
    }
    public function listing()
    {
        return view("listing");
    }
    public function contact()
    {
        return view("contact");
    }
    public function testimonials()
    {
        return view("testimonials");
    }
    public function single()
    {
        return view("single");
    }
}
