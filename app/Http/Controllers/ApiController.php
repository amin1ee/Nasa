<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getMarsData(Request $request){
        $date = $request->input('date', now()->toDateString());

        $response = Http::get("https://api.nasa.gov/planetary/apod?api_key=iONcSyga6mOqxCAoMHc4hzAc6U01jU21YanQ41hL&date=$date");
        if ($response->failed()) {
            return response()->json(['error' => 'API request failed'], 200);
        }
        return view('welcome', ['data' => $response->json()]);


        
    }
    public function ShowHeroPage()
    {
        return view('hero'); 
    }
   

}
