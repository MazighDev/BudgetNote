<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\RevenuController;
use App\Http\Controllers\DepenseController;


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

Route::get('/', function () {
    return view('home');
});

Route::get('/register',[UserController::class, 'create']);
// create new user
Route::post('/users',[UserController::class,'store']);
// route to index page
Route::get('/index',function(){
    return view('index');
});
Route::get('/testinterface',function(){
    return view('depense2');
});
Route::get('/budget', function () {
    return view('budget');
})->middleware('auth');

Route::get('/depense', function () {
    return view('depense');
})->middleware('auth');

Route::get('/revenu', function () {
    return view('revenu');
})->middleware('auth');

// user log out
Route::post('/logout',[UserController::class,'logout']);
// show login form 
Route::get('/login',[UserController::class,'login'])->name('login');
// log in User
Route::post('/users/authenticate',[UserController::class,'authenticate']);
Route::middleware(['auth'])->group(function () {
    // add revenu 
    Route::post('/addrevenu',[RevenuController::class,'store']);
    // display revenus
    Route::get('/revenu',[RevenuController::class,'show']);
    // delete revenu
    Route::delete('/revenu/{id}', [RevenuController::class, 'destroy'])->name('revenu.delete');
    // edit revenu
    Route::get('/editrevenu/{id}',[RevenuController::class,'edit']);
    Route::put('/updaterevenu/{id}', [RevenuController::class, 'update']);
    // add depense
    Route::post('/adddepense',[DepenseController::class,'store']);
    // display depense
    Route::get('/depense',[DepenseController::class,'show']);
    // delete depense
    Route::delete('/depense/{id}', [DepenseController::class, 'destroy'])->name('depense.delete');
    // edit depense
    Route::get('/editdepense/{id}',[DepenseController::class,'edit']);
    Route::put('/updatedepense/{id}',[DepenseController::class,'update']);
    // add budget
    Route::post('/addbudget',[testController::class,'store']);
      // display budget
      Route::get('/budget',[testController::class,'show']);
      // delete budget
    Route::delete('/budget/{id}', [testController::class, 'destroy'])->name('budget.delete');
    // show overall infos
    Route::get('/index',[IndexController::class,'show']);
 
});











