<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

use App\CarParts;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }
    public function admin_cars()
    {
        $cars = Car::all()->reverse();
        return view('admin_cars')->with(compact('cars'));
    }
    
    public function admin_parts()
    {
        $car_parts = CarParts::all();
        return view('admin_parts')->with(compact('car_parts'));
    }


    public function cars()
    {
        $cars = Car::all()->reverse();
        return view('cars')->with(compact('cars'));
    }
    
    public function parts()
    {
        $car_parts = CarParts::all();
        return view('parts')->with(compact('car_parts'));
    }
}
