<?php

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

Route::get('/', function () {
    return view('blog');
});

Route::view('/welcome', 'welcome');

Route::get('wfp/{kelas?}',function($kelas = 'Z'){
    //apabila kelas bukan C,
    //itu munculkan "bukan kelas saya"
    //apabila kelas C, maka
    //keluarkan WFP kelas saya
    //
    if($kelas == 'C' || $kelas == 'c'){
        return "Kelas Saya "; 
    }
    else{
        return "Bukan kelas saya";
    }
});

Route::get('bayu', function () {
    return "Hello WFP C";
});

Route::get('greeting',function(){
    return view ('welcome',['name' => 'bayu']);
});