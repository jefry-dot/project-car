<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;



class HomeController extends Controller
{
    public function index()
    {
        return view("home.index")
        ->with("name","Laravel")
        ->with("surename","Course")
        ->with("country","uk")
        ->with("job","<b>Developer</b>")
        ->with("hobbies",["Cooking","Reading"]);
    }
}
