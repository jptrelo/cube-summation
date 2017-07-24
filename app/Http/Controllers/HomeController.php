<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
	{
	    $data =  \Corcel\Page::slug('sample-page')->first();
	    return view('home')->with('data', $data);
	}
}
