<?php
/**
 * TEST
 *
 * @category    Helper
 * @package     TEST_APP
 * @author      Ayoub HAMOUDI <hamoudi.ayoub@gmail.com>
 * @copyright   Ayoub
 */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/listing-film', function () {
    return view('listing');
});
Route::get('/edit-film/{id}', function ($id) {
    return view('edit', compact('id'));
});
