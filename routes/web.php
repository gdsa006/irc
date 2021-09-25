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
})->name('home');

Route::get('/search', 'App\Http\Controllers\LocationFinderController@searchAddress');
Route::get('/steps', [App\Http\Controllers\LeadsController::class,'Steps'])->name('steps');
Route::get('/stepOneProcess', [App\Http\Controllers\LeadsController::class,'StepOneProcess'])->name('stepOneProcess');
Route::get('/stepTwoProcess', [App\Http\Controllers\LeadsController::class,'stepTwoProcess'])->name('stepTwoProcess');
Route::get('/stepThreeProcess', [App\Http\Controllers\LeadsController::class,'stepThreeProcess'])->name('stepThreeProcess');
Route::get('/stepOne', [App\Http\Controllers\LeadsController::class,'StepOne'])->name('stepOne');
Route::get('/stepTwo', [App\Http\Controllers\LeadsController::class,'StepTwo'])->name('stepTwo');
Route::get('/stepThree', [App\Http\Controllers\LeadsController::class,'StepThree'])->name('stepThree');
Route::get('/closeSteps', [App\Http\Controllers\LeadsController::class,'closeSteps'])->name('closeSteps');


Route::get('test', function () {
    return 'test success';
});

Route::get('ircfileimportexport', [App\Http\Controllers\LocationFinderController::class, 'fileImportExport']);
Route::post('file-import', [App\Http\Controllers\LocationFinderController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [App\Http\Controllers\LocationFinderController::class, 'fileExport'])->name('file-export');


Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});