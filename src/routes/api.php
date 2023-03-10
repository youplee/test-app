<?php
/**
 * TEST
 *
 * @category    Helper
 * @package     TEST_APP
 * @author      Ayoub HAMOUDI <hamoudi.ayoub@gmail.com>
 * @copyright   Ayoub
 */
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
    Route::get('getFilms', 'getFilms');

});
Route::controller(FilmController::class)->group(function () {
    Route::get('listing-film', 'index');
    Route::get('detail-film/{id}', 'show');
    Route::post('save-film/{id}', 'update');

});

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
