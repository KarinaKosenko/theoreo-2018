<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminlte.layouts.primary', [

            'page' => 'adminlte.pages.home',
            'title' => 'Theoreo | Административная панель',
        ]);
    }
    public function brands()
    {
        return view('adminlte.layouts.primary', [

            'page' => 'adminlte.pages.brands',
            'title' => 'Theoreo | Административная панель',
        ]);
    }
}
