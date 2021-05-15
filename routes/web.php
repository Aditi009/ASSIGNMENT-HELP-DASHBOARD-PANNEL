<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AssignmentController;
use App\Models\Assignment;
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

Route::get('/dashboard', function () {
    return view('layout.layout');
})->middleware(['auth'])->name('dashboard');



Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth'])->group(function () {

Route::get('NewAssignment',[AdminController::class,'NewAssignment']);
Route::get('NewnotPaid',[AdminController::class,'NewnotPaid']);
Route::get('Ppfa',[AdminController::class,'Ppfa']);
Route::get('AllocatedFreelancer',[AssignmentController::class,'AllocatedFreelancer']);
Route::get('DoneWithProof',[AdminController::class,'DoneWithProof']);
Route::get('DoneWithoutProof',[AdminController::class,'DoneWithoutProof']);
Route::get('StudentreWork',[AdminController::class,'StudentreWork']);
Route::get('ExpiredAssignment',[AdminController::class,'ExpiredAssignment']);
Route::get('AddFreelancer',[AdminController::class,'AddFreelancer']);
Route::get('uploadAssignment',[AssignmentController::class,'uploadAssignment']);
Route::get('viewAssignment',[AssignmentController::class,'viewAssignment']);
});




Route::any('/updateQuotes/{id}',[AssignmentController::class,'updateQuotes']);
Route::get('editP/{id}',[AssignmentController::class,'edit']);
Route::get('del/{id}',[AssignmentController::class,'del']);
Route::get('delsub/{id}',[AssignmentController::class,'delsub']);
Route::get('proof/{id}',[AssignmentController::class,'proof']);
Route::post('/freelancerquotes',[AssignmentController::class,'freelancerquotes']);
Route::post('/uploadassignments',[AssignmentController::class,'uploadassignments']);
Route::get('/order',[AssignmentController::class,'order']);
Route::get('/ordernotpaid',[AssignmentController::class,'ordernotpaid']);
Route::get('/addsubject',[AssignmentController::class,'addsubject']);
Route::post('/uploadsubject',[AssignmentController::class,'uploadsubject']);
require __DIR__.'/auth.php';
