<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kuldeep;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacultiesController;


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


Route::get('/kuldeep', function () {     // diffrrent ways for passing data to view totol 4 way
    $name = 'kuldeep lohar';             // using view()   first way
    return view('kuldeep',['aaa'=>$name]);
});
Route::get('/', function () {     // diffrrent ways for passing data to view totol 4 way
    $name = 'kuldeep lohar';             // using view()   first way
    return view('kuldeep',['aaa'=>$name]);
});

Route::get('/rohit', function () {
    $fullname = 'rohit mali';
    $add  = ' from neemuch';
    return view('rohit',compact('fullname','add'));   //using compact()  secound view
});
Route::get('/rishabh', function () {
     $fname = 'Rishabh vaisan';
    return view('rishabh')->with('zzz',$fname);   //using with()  secound view
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/kl',[Kuldeep::class , 'show']);


Route::get('/category',[CategoryController::class , 'index']);
Route::get('/category/create',[CategoryController::class , 'create']);



// faculties

Route::get('/faculty',[FacultiesController::class , 'index']);
Route::post('/faculty/create',[FacultiesController::class , 'create']);
Route::post('faculty/store',[FacultiesController::class , 'store']) ->name('faculty.store');
Route::get('faculty/show/{id}',[FacultiesController::class , 'show']) ->name('faculty.show');
Route::get('faculty/edit/{id}',[FacultiesController::class , 'edit']) ->name('faculty.edit');
Route::post('faculty/update',[FacultiesController::class , 'update']) ->name('faculty.update');
Route::get('faculty/delete/{id}',[FacultiesController::class , 'destroy']) ->name('faculty.delete');



// add prefix in router

