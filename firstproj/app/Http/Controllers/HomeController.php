<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('pages.Home.index');
    }

    public function show($id)
    {
        return view('pages.posts.index', compact('id'));
    }
}


//  php artisan make:model Post -mcr