<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("pages.home");
    }

    public function category()
    {
        return view("pages.category");
    }
    public function author()
    {
        return view("pages.author");
    }
    public function borrowing()
    {
        return view("pages.borrowing");
    }
}
