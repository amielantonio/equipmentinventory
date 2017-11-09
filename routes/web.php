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
    Route::get('equipments/get', 'EquipmentController@get');

});

/**
 * Employees Routing
 */
Route::group(['namespace' => 'Employee', 'middleware'=>'web'], function(){

    Route::resource('employees', 'EmployeeController');
    Route::get('employee/get', 'EmployeeController@get');

});

/**
 * Computer Routing
 */
Route::group(['namespace' => 'Computer', 'middleware'=>'web'], function(){

    Route::resource('computers', 'ComputerController');
    Route::get('computer/build', 'ComputerController@buildComputer')->name('computer-build');
    Route::get('computer/get', 'ComputerController@get');

});

/**
 * Workstations Routing
 */
Route::group(['namespace' => 'Workstation', 'middleware'=>'web'], function(){

    Route::resource('workstation', 'WorkstationController');
    Route::get('workstations/get', 'WorkstationController@get');
    Route::get('workstations/assign', 'WorkstationController@assign')->name('workstations');

});

/**
 * Stations Routing
 */
Route::group(['namespace'=>'Workstation', 'middleware'=>'web'], function(){

    Route::resource('station', 'StationController');
    Route::get('station/{workstation}/user', 'StationController@showWithUser')->name('stations');

});


/**
 * Categories Routing
 */
Route::group(['middleware'=>'web'], function(){

    Route::resource('categories', 'CategoryController');

});
