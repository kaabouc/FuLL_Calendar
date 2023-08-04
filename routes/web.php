<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FamilyController;
use Illuminate\Support\Facades\Auth;
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
Route::resource('family', FamilyController::class);
Route::resource('event', EventController::class);
Route::resource('categorie', CategorieController::class);
Route::post('/family/{id}/addUser',  [App\Http\Controllers\FamilyController::class, 'addUser'])->name('family.addUser');
Route::post('/family/{familyId}/removeUser/{userId}', [App\Http\Controllers\FamilyController::class, 'removeUser'])->name('family.removeUser');
Route::get('/family/{familyId}/users/{userId}/events',  [App\Http\Controllers\FamilyController::class, 'userEvents'])->name('family.users.events');
// Route::post('/family/{familyId}/requestJoin/{userId}', [App\Http\Controllers\FamilyController::class, 'requestJoin'])->name('families.requestJoin');
Route::post('/family/{familyId}/searchUser', [App\Http\Controllers\FamilyController::class, 'searchUser'])->name('family.searchUser');
Route::get('/family/{familyId}/sendInvitation/{userId}', [App\Http\Controllers\FamilyController::class, 'sendInvitation'])->name('family.sendInvitation');
Route::post('/family/{familyId}/handleInvitation/{userId}/{status}', [App\Http\Controllers\FamilyController::class, 'handleInvitation'])->name('family.handleInvitation');
Route::get('/family/{familyId}/invitations', [App\Http\Controllers\FamilyController::class, 'invitations'])->name('family.invitations');


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/users/show', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
