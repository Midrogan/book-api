<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\TagController;
use App\Http\Controllers\Api\v1\BookController;
use App\Http\Controllers\Api\V1\GenreController;
use App\Http\Controllers\Api\V1\AuthorController;
use App\Http\Controllers\Api\V1\SeriesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResources([
    'books' => BookController::class,
    'authors' => AuthorController::class,
    'genres' => GenreController::class,
    'tags' => TagController::class,
    'series' => SeriesController::class,
]);