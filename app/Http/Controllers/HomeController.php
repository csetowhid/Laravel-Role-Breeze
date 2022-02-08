<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // function __construct()
    // {
    //     $this->middleware('dashboard:dashboard-show', ['only' => ['index']]);
    // }
    public function index()
    {
        return view('backend.index');
    }
}
