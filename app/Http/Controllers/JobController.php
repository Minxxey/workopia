<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index() {
        $title = 'Available Jobs';
        $jobs = [
            'Web Developer',
            'Programmer',
            'Web Designer'
        ];

        return view('jobs.index', compact('title', 'jobs'));
    }

    public function create() {
        return view('jobs.create');
    }

    //show method for singular method names
}
