<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() 
    {
        return view('site.index');
    }

    public function about() 
    {
        return view('site.about');
    }


    // Student Pages
    public function studentIndex() 
    {
        return view('site.student.index');
    }
}
