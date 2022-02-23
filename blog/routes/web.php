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

Route::get('catalog/',function(){
    return view('catalog'); 
})->name('catalog');
Route::get('catalog/medicines',function(){
    return  view('list',['name'=>'medicines']); 
})->name('medicines');
Route::get('catalog/med_equip',function(){
    return  view('list',['name'=>'med_equip']); 
})->name('med_equip');

Route::get('catalog/medicines/{id}',function($id){
    return view('detail',['detailid'=>$id]); 
})->name('detailmedicines');
Route::get('catalog/med_equip/{id}',function($id){
    return  view('detail',['detailid'=>$id]); 
})->name('detailequip');