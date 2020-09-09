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
    return view('welcome');
});

Route::resource('datatable', 'DatatableController');

Route::get('/data', 'DatatableController@index');

Route::resource('hobby', 'HobbyController');

Route::get('fullcalendar', 'FullCalendarController@index')->name('index');

Route::get('/load-events', 'EventController@loadEvents')->name('routeLoadEvents');

Route::put('/event-update', 'EventController@update')->name('routeEventUpdate');

Route::post('/event-store', 'EventController@store')->name('routeEventStore');

Route::delete('/event-destroy', 'EventController@destroy')->name('routeEventDelete');



