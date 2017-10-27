<?php

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


/**
 * Dashboard Routes
 */
Route::get('/', "DashboardController@index")->name('dashboard');


/**
 * Equipment Routing
 */

Route::group(['namespace' => 'Equipment', 'middleware'=>'web'], function(){

    Route::resource('equipment', 'EquipmentController');

});

/**
 * Employees Routing
 */
Route::group(['namespace' => 'Employee', 'middleware'=>'web'], function(){

    Route::resource('employees', 'EmployeeController');

});

/**
 * Computer Routing
 */
Route::group(['namespace' => 'Computer', 'middleware'=>'web'], function(){

    Route::resource('computers', 'ComputerController');
    Route::get('computer/build', 'ComputerController@buildComputer')->name('computer-build');

});

/**
 * Workstations Routing
 */
Route::group(['namespace' => 'Workstation', 'middleware'=>'web'], function(){

    Route::resource('workstation', 'WorkstationController');

});


/**
 * Categories Routing
 */
Route::group(['middleware'=>'web'], function(){

    Route::resource('categories', 'CategoryController');

});
