<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{
    public function index()
    {
        return view('portfolio.index'); // Ensure you have resources/views/index.blade.php
    }

    public function projects()
    {
        return view('projects'); // Ensure you have resources/views/projects.blade.php
    }

    public function contact()
    {
        return view('contact'); // Ensure you have resources/views/contact.blade.php
    }
}