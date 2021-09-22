<?php

namespace App\Http\Controllers;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationFinderController extends Controller
{
    public function searchAddress(Request $request){
        $keyword = $request->query('search');; 
        $search = Location::where('Address', 'LIKE', "%$keyword%")->get();
        return response()->json(array('search'=>$search, 'keyword'=>$keyword));
    }
}
