<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Models\Listing;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Lastest Listings',
        'listings' => Listing::all()
    ]);
});

//single listing
Route::get('/listings/{id}', function ($id) {
    //ddd($id);
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});



//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});

/*Route::get('/hello', function () {
    return response ('<h1>Hello World</h1>', 200)
        ->header('Content-Type', 'text/html')
        ->header('X-Custom-Header', 'Custom Value')
        ->cookie('name', 'value', 3600);
});

Route::get('/posts/{id}', function ($id) {
    //ddd($id); // dump, die and debug
    //dd($id); // dump and die

    return response('Post '. $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request){
     return ($request->name . ' ' . $request->city);
});
*/

//require __DIR__.'/auth.php';
