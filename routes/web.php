<?php
use App\Models\Author;
use Illuminate\Support\Facades\Route;
use Illuminate\http\Request;
use Illuminate\Support\Facades\DB;
Use App\Http\Controllers\AuthorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get("/", [AuthorController::class, 'mostrar']);
