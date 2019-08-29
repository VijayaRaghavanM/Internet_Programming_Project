<?php

namespace App\Http\Controllers;
use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function delete($id){
        $car = Car::find($id);
        $car->delete();
        return back();
    }


    public function create(Request $request){
     $car = new Car;
     $car->photopath = $request->photopath ;        
     $car->name = $request->name ;        
     $car->transmission = $request->transmission ;        
     $car->mileage = $request->mileage ;        
     $car->price = $request->price ;        
     $car->gear_box = $request->gear_box ;        
     $car->fuel_type = $request->fuel_type ; 
     $car->save();       
     return back();
    }

    public function update(Request $request, $id){
        $car = Car::find($id);
        $car->transmission = $request->transmission ;        
        $car->mileage = $request->mileage ;        
        $car->price = $request->price ;        
        $car->gear_box = $request->gear_box ;        
        $car->fuel_type = $request->fuel_type ; 
        $car->save();       
        return back();
    }
}
