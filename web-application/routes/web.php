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


Auth::routes();

Route::get('logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/messenger', 'MessengerController@index');
Route::get('/contacts', 'MessengerController@getContacts');
Route::get('/conversations/{id}', 'MessengerController@getMessagesFor');
Route::post('/conversations/send', 'MessengerController@send');

Route::get('/upload/workers/{firstName}-{lastName}/picture.jpg','fileController@getWorkerPicture');
Route::get('/upload/locations/{location}/picture.jpg','fileController@getLocationPicture');
Route::get('/upload/products/{product}/picture.jpg','fileController@getProductPicture');

Route::get('/getStates/{id}','HomeController@getStates');


Route::get('/manage/new-location','locationController@onOpenNewLocation');
Route::post('/manage/save-location','locationController@onSubmitNewLocation');

Route::get('/manage/manage-locations','locationController@onOpenManageLocations');
Route::get('/manage/manage-locations/delete/{id}','locationController@onOpenManageLocationDelete');
Route::get('/manage/manage-locations/edit/{id}','locationController@onOpenManageLocationEdit');
Route::Post('/manage/manage-locations/save-edit/{id}','locationController@onSaveManageLocationEdit');
Route::get('/manage/manage-locations/{id}','locationController@onOpenManageLocationsLocation');


Route::get('/manage/new-mitarbeiter','mitarbeiterController@onOpenNewMitarbeiter');
Route::post('/manage/save-mitarbeiter','mitarbeiterController@onSubmitNewMitarbeiter');

Route::get('/manage/manage-mitarbeiter','mitarbeiterController@onOpenManageMitarbeiter');
Route::get('/manage/manage-mitarbeiter/delete/{id}','mitarbeiterController@onOpenManageMitarbeiterDelete');
Route::get('/manage/manage-mitarbeiter/edit/{id}','mitarbeiterController@onOpenManageMitarbeiterEdit');
Route::Post('/manage/manage-mitarbeiter/save-edit/{id}','mitarbeiterController@onSaveManageMitarbeiterEdit');
Route::get('/manage/manage-mitarbeiter/{id}','mitarbeiterController@onOpenManageMitarbeiterArbeiter');


Route::get('/manage/new-produkt','productController@onOpenNewProdukt');
Route::post('/manage/save-produkt','productController@onSubmitNewProdukt');

Route::get('/manage/manage-produkte','productController@onOpenManageProdukte');
Route::get('/manage/manage-produkte/delete/{id}','productController@onOpenManageProdukteDelete');
Route::get('/manage/manage-produkte/edit/{id}','productController@onOpenManageProdukteEdit');
Route::Post('/manage/manage-produkte/save-edit/{id}','productController@onSaveManageProdukteEdit');
Route::get('/manage/manage-produkte/{id}','productController@onOpenManageProdukteProdukt');


Route::get('/manage/new-user', 'userController@onOpenNewUser');
Route::post('/manage/save-user', 'userController@onSubmitNewUser');

Route::get('/manage/manage-users', 'userController@onOpenManageUsers');
Route::get('/manage/manage-users/delete/{id}','userController@onOpenManageUserDelete');
Route::get('/manage/manage-users/edit/{id}','userController@onOpenManageUserEdit');
Route::Post('/manage/manage-users/save-edit/{id}','userController@onSaveManageUserEdit');
Route::get('/manage/manage-users/reset-password/{id}','userController@onClickResetPassword');


