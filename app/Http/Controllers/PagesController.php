<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // index page
    public function index(){
        $title = 'Welcome to Laravel';
        // return view('pages.index', compact('title'));
        return view('pages.index') -> with('title', $title);
    }

    // about page
    public function about(){
        $title = 'About Us';
        return view('pages.about') -> with('title', $title);
    }

    // services page
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services') -> with($data);
    }
}
