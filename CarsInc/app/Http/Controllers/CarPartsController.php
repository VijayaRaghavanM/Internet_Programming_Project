<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarParts;


class CarPartsController extends Controller
{
    public function delete($id){
        $car = CarParts::find($id);
        $car->delete();
        return back();
    }


    public function create(Request $request){
     $car = new CarParts;
     $car->photopath = $request->photopath ;        
     $car->name = $request->name ;        
     $car->description = $request->description ;  
     $car->price = $request->price ;        
     $car->save();       
     return back();
    }

    public function update(Request $request, $id){
        $car = CarParts::find($id);
        $car->description = $request->description ;        
        $car->price = $request->price ;        
        $car->save();       
        return back();
    }
}
