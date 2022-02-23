<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChampionController;
use App\Models\Champion;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get("/", [ChampionController::class, "index"])->name("champion.index");
Route::get("/champion", [ChampionController::class, "index"])->name("champion.index");
Route::get("/champion/{champion}", [ChampionController::class, "show"])->name("champion.show");

Route::get('/', function () {
    $champions= Champion::all();
    return view('welcome',['champions'=>$champions]);
});