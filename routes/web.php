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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('auth');

// Route::get('admin/profile', function () {
//     //
// })->middleware('auth');

// Route::get('/EmployeeRegistration', function () {
//     return view('empregistration');
// });

// Route::post('/registeremp','EmpRegisterController@empindex')->name('empindex');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');




Route::get('/patients',function(){
	return view('patient');
});

Route::resource('/patient','PatientController',[
'names'=>[ 'index'=>'patient',
			'store'=>'patient.store',
			'edit'=>'patient.edit',
			'update'=>'patient.update']
		]);

Route::post('edit/{id}','StudUpdateController@edit');
// Route::post('/patient','PatientController@store');
//Route::resource('/patientshow','PatientController')->name('patient.show');
