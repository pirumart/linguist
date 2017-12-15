<?php

namespace App\Http\Controllers;

use App\Models\Topic;

class DashboardController extends Controller
{
    public function index()
    {
        $no_of_topics = Topic::count();
        return view('dashboard', compact('no_of_topics'));
    }
}
