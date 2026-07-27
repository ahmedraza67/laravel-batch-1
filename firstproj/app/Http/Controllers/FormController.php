<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('pages.Form.index');
    }
    public function dataPrint(Request $request)
    {
        $data = $request->request;
        return view('pages.Home.index', compact('data'));
    }
}
