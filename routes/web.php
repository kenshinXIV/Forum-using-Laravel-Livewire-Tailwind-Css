<?php

Route::livewire('/' , 'home')->name('home')->middleware('auth');
Route::livewire('/show-post' , 'show-post')->name('show-post')->middleware('auth');
Route::group(['middleware'=>'guest'] ,function(){
    Route::livewire('/login' , 'login')->name('login');
    Route::livewire('/register' , 'register');
});
