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



// new 

Route::get('/', function () {
    return view('new.home');
})->name('homepage');


// Route::get('/', function () {
//     return view('homepage');
// })->name('home');

// Route::get('/search', 'App\Http\Controllers\LocationFinderController@searchAddress');
// Route::get('/stepOneProcess', [App\Http\Controllers\LeadsController::class,'StepOneProcess'])->name('stepOneProcess');
// Route::get('/stepTwoProcess', [App\Http\Controllers\LeadsController::class,'stepTwoProcess'])->name('stepTwoProcess');
// Route::get('/stepThreeProcess', [App\Http\Controllers\LeadsController::class,'stepThreeProcess'])->name('stepThreeProcess');
// Route::get('/fullName', [App\Http\Controllers\LeadsController::class,'fullName'])->name('fullName');
// Route::get('/emailAddress', [App\Http\Controllers\LeadsController::class,'emailAddress'])->name('emailAddress');
// Route::get('/mobileNumber', [App\Http\Controllers\LeadsController::class,'mobileNumber'])->name('mobileNumber');
// Route::get('/closeSteps', [App\Http\Controllers\LeadsController::class,'closeSteps'])->name('closeSteps');


// Route::get('about', [App\Http\Controllers\OtherPagesController::class,'about'])->name('about');
// Route::get('terms-and-conditons', [App\Http\Controllers\OtherPagesController::class,'termsConditions'])->name('terms-and-conditons');





 Route::get('/fullName', [App\Http\Controllers\LeadsController::class,'fullName'])->name('fullName');

Route::get('/process', [App\Http\Controllers\LeadsController::class,'process'])->name('process');
Route::post('/step1', [App\Http\Controllers\LeadsController::class,'step1'])->name('step1');




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















