<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('agent');
    }

    public function index()
    {
        $agent = auth()->user();

        return $agent;
    }
}
