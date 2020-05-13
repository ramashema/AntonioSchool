<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

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

Route::resource('students', 'StudentController');
Route::resource('guardians', 'GuardianController');

Route::get('add_classes/', function (){

    App\Darasa::create([
       'name'=>'Baby Class',
        'description'=>'A class for 1 to 2 years children'
    ]);

    App\Darasa::create([
        'name'=>'Middle Class',
         'description'=>'A class for 2 to 4 years children'
     ]);

     App\Darasa::create([
        'name'=>'Juniors Class',
         'description'=>'A class for 4 to 6 years children'
     ]);

});
