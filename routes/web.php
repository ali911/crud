<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('photos', PhotoController::class);
//

// Route::get('/', [PhotoController::class, 'index']);
// Route::get('photos/create', [PhotoController::class, 'create']);
// Route::post('photos', [PhotoController::class, 'store']);
// Route::get('photos/{photo}', [PhotoController::class, 'show']);
// Route::get('photos/{photo}/edit', [PhotoController::class, 'edit']);
// Route::patch('photos/{photo}', [PhotoController::class, 'update']);
// Route::delete('photos/{photo}', [PhotoController::class, 'destroy']);
