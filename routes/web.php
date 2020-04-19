<?php

Route::get('admin/plans','admin\PlanController@index')->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
