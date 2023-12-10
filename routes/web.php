<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kuldeep;

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
Route::get('/rohit', function () {
    $fullname = 'rohit mali';
    $add  = ' from neemuch';
    return view('rohit',compact('fullname','add'));   //using compact()  secound view
});
Route::get('/rishabh', function () {
     $fname = 'Rishabh vaisan';
    return view('rishabh')->with('zzz',$fname);   //using with()  secound view
});

Route::get('/anil',[Kuldeep::class , 'show']);
