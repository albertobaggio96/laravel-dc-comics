<?php

use App\Http\Controllers\Admin\ComicProductController;
use App\Http\Controllers\Guest\ComicHome;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ComicHome::class, "index"])->name("guest.index");
Route::prefix("admin")->name("admin.")->group(function(){
  Route::resource("comic", ComicProductController::class);
});


// Route::get('/create', [ComicProductController::class, "create"])->name("admin.create");
// Route::get('/{comic}', [ComicProductController::class, "show"])->name("admin.show");
// Route::post('/', [ComicProductController::class, "store"])->name("admin.store");
// Route::get('/{comic}/edit', [ComicProductController::class, "edit"])->name("admin.edit");
// Route::put('/{comic}', [ComicProductController::class, "update"])->name("admin.update");
// Route::delete('/{comic}', [ComicProductController::class, "destroy"])->name("admin.destroy");



