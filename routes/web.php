<?php



// Serve the Hero page on the homepage
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Serve the Hero page on the homepage
Route::get('/', [ApiController::class, 'ShowHeroPage']);

// Serve the welcome view on a different route, e.g., /home
Route::post('/home', [ApiController::class, 'GetMarsData'])->name('home');




