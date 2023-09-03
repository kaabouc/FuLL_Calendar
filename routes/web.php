<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\InformationController;
use App\Models\information_site;
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

Route::get('/information', [App\Http\Controllers\InformationController::class, 'index'])->name('information.index');
Route::post('/information/modifier',  [App\Http\Controllers\InformationController::class, 'update_information'])->name('information.update');

Route::resource('categorie', CategorieController::class);
Route::post('/family/{id}/addUser',  [App\Http\Controllers\FamilyController::class, 'addUser'])->name('family.addUser');
Route::post('/family/{familyId}/removeUser/{userId}', [App\Http\Controllers\FamilyController::class, 'removeUser'])->name('family.removeUser');
Route::get('/family/{familyId}/users/{userId}/events',  [App\Http\Controllers\FamilyController::class, 'userEvents'])->name('family.users.events');
// Route::post('/family/{familyId}/requestJoin/{userId}', [App\Http\Controllers\FamilyController::class, 'requestJoin'])->name('families.requestJoin');
Route::post('/family/{familyId}/searchUser', [App\Http\Controllers\FamilyController::class, 'searchUser'])->name('family.searchUser');
Route::get('/family/{familyId}/sendInvitation/{userId}', [App\Http\Controllers\FamilyController::class, 'sendInvitation'])->name('family.sendInvitation');
Route::post('/family/{familyId}/handleInvitation/{userId}/{status}', [App\Http\Controllers\FamilyController::class, 'handleInvitation'])->name('family.handleInvitation');
Route::get('/family/{familyId}/invitations', [App\Http\Controllers\FamilyController::class, 'invitations'])->name('family.invitations');

Route::resource('contact', ContactController::class);
Route::get('/', function () {
    $siteInformation = information_site::first();

    if (!$siteInformation) {
        $siteInformation = new information_site();
        $siteInformation->telephone = '060000000';
        $siteInformation->address = 'maroc , marrakech , ru 19';
        $siteInformation->email = 'admin_page@fullcalendar.com';
        $siteInformation->description = 'Family Calendar est un calendrier interactif partagé conçu pour les familles. Organisez facilement vos emplois du temps, partagez des événements et restez synchronisés en un seul 
        endroit pratique. Simplifiez la coordination familiale pour des moments inoubliables ensemble.';
        $siteInformation->save();
    }
    return view('welcome',compact('siteInformation'));
});

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');


Route::resource('user', UserController::class);
Auth::routes();
Route::get('/users/show', [App\Http\Controllers\UserController::class, 'show_user'])->name('users.show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
