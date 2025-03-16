<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getMarsData(){
        $response = Http::get("https://api.nasa.gov/planetary/apod?api_key=DEMO_KEY");
        if ($response->failed()) {
            return response()->json(['error' => 'API request failed'], 500);
        }
        return view('welcome', ['data' => $response->json()]);


        
    }
    public function ShowHeroPage()
    {
        return view('hero'); 
    }

}
