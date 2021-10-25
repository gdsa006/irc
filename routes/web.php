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
 Route::get('/search', 'App\Http\Controllers\LocationFinderController@searchAddress');

Route::get('/process', [App\Http\Controllers\LeadsController::class,'process'])->name('process');
Route::post('/saveOne', [App\Http\Controllers\LeadsController::class,'saveOne'])->name('saveOne');
Route::post('/saveTwo', [App\Http\Controllers\LeadsController::class,'saveTwo'])->name('saveTwo');
Route::post('/saveThree', [App\Http\Controllers\LeadsController::class,'saveThree'])->name('saveThree');
Route::post('/saveFour', [App\Http\Controllers\LeadsController::class,'saveFour'])->name('saveFour');
Route::post('/saveFive', [App\Http\Controllers\LeadsController::class,'saveFive'])->name('saveFive');
Route::post('/saveSix', [App\Http\Controllers\LeadsController::class,'saveSix'])->name('saveSix');
Route::post('/saveSeven', [App\Http\Controllers\LeadsController::class,'saveSeven'])->name('saveSeven');
Route::post('/saveEight', [App\Http\Controllers\LeadsController::class,'saveEight'])->name('saveEight');
Route::post('/saveNine', [App\Http\Controllers\LeadsController::class,'saveNine'])->name('saveNine');
Route::post('/saveTen', [App\Http\Controllers\LeadsController::class,'saveTen'])->name('saveTen');

Route::post('/destroy', [App\Http\Controllers\LeadsController::class,'destroySession'])->name('destroySession');

Route::get('/estimate', [App\Http\Controllers\LeadsController::class,'estimate'])->name('estimate');
Route::get('/terms-of-service', [App\Http\Controllers\LeadsController::class,'termsOfService'])->name('terms-of-service');
Route::get('/privacy-policy', [App\Http\Controllers\LeadsController::class,'privacyPolicy'])->name('privacy-policy');
Route::get('/our-guarantee', [App\Http\Controllers\LeadsController::class,'ourGuarantee'])->name('our-guarantee');



Route::get('ircfileimportexport', [App\Http\Controllers\LocationFinderController::class, 'fileImportExport']);
Route::post('file-import', [App\Http\Controllers\LocationFinderController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [App\Http\Controllers\LocationFinderController::class, 'fileExport'])->name('file-export');




Route::get('dashboard/welcome', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('welcome');
Route::get('dashboard/rates', [App\Http\Controllers\DashboardController::class, 'rates'])->name('rates');
Route::get('dashboard/leads', [App\Http\Controllers\DashboardController::class, 'leads'])->name('leads');
Route::get('dashboard/leads/{id}', [App\Http\Controllers\DashboardController::class, 'showLead'])->name('leads');


Route::get('/login', [App\Http\Controllers\LoginController::class, 'show_login_form'])->name('login');
Route::post('/login', [App\Http\Controllers\LoginController::class, 'process_login'])->name('login');
Route::get('/logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');











Route::get('send-mail', function () {
   
    $details = [
        'title' => 'Mail from ItSolutionStuff.com',
        'body' => 'This is for testing email using smtp'
    ];
   
    \Mail::to('your_receiver_email@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});















