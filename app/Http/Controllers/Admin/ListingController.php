<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $listings = Listing::all();

        return $listings;
    }

    public function create()
    {
        return;
    }

    public function store(Request $request)
    {
        return;
    }

    public function show($id)
    {
        $listing = Listing::findOrFail($id);

        return $listing;
    }

    public function update(Request $request, $id)
    {
        $listing = Listing::findOrFail($id);

        return $listing;
    }
}
