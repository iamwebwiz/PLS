<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('agent');
    }

    public function index()
    {
        $listings = auth()->user()->listings;

        return $listings;
    }
}
