<?php

use App\Http\Controllers\Admin\ComicProductController;
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

Route::get('/', [ComicProductController::class, "index"])->name("admin.index");
Route::get('/create', [ComicProductController::class, "create"])->name("admin.create");
Route::get('/{comic}', [ComicProductController::class, "show"])->name("admin.show");
