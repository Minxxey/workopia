<?php

namespace App\Http\Controllers;

use App\Models\Job;

class HomeController extends Controller
{
    public function index() {

        $latestJobs = Job::latest()->limit(6)->get();

        return view('pages.index')->with('latestJobs', $latestJobs);
    }
}
