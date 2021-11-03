<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Grades\GradeController;
use App\Http\Controllers\Classes\ClassesController;
use App\Http\Controllers\Sections\SectionController;
use App\Http\Controllers\Partners\PartnerController;
use App\Http\Controllers\Messages\MessageController;
use App\Http\Controllers\Auth\UserController;

use App\Http\Controllers\Servics\ServiceController;



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


// Route::get('/home', 'HomeController@home')->name('homee');

Auth::routes();










Route::group(['middleware'=>['guest']],function(){

    Route::get('/', function()
    {
        return view('auth.login');
    });
    
});









Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth' ]
    ],  function()
	{
        Route::get('/home', 'HomeController@home')->name('homee')->withoutMiddleware('auth');
        Route::get('Sections/{id}/Servics', 'HomeController@getService')->name('allServices')->withoutMiddleware('auth');

        // Route::get('/h, 'HomeController@home')->name('homee')->withoutMiddleware('auth');
        Route::get('/about-us', 'HomeController@about')->name('about')->withoutMiddleware('auth');
        Route::post('/storeMessage', 'HomeController@storeMessage')->name('storeMessage')->withoutMiddleware('auth');
        Route::get('/detalis/{id}', 'HomeController@detalis')->name('detalisPartners')->withoutMiddleware('auth');
        Route::get('/SectionsInfo/{id}', 'HomeController@SectionsInfo')->name('SectionsInfo')->withoutMiddleware('auth');

   
        Route::get('/dashboard', 'HomeController@index')->name('Dashboard');
        Route::fallback(function () {
            return view('errors.404');
        })->withoutMiddleware('auth');

    
        
        
        
        Route::group(['namespace'=>'Servics'],function(){
            Route::resource('Servics', 'ServiceController');
        });
        
        Route::group(['namespace'=>'Messages'],function(){
            Route::resource('Messages', 'MessageController');
        });



            Route::group(['namespace'=>'Auth'],function(){
                Route::resource('Users', 'UserController');
        });


        Route::group(['namespace'=>'Partners'],function(){
            Route::resource('Partners', 'PartnerController');
        });
        

Route::group(['namespace'=>'Sections'],function(){
    Route::resource('Sections', 'SectionController');

    Route::delete('Sections/delete/{id}','SectionController@delete')->name('Sections.delete');
    Route::get('Sections/edit/{id}','SectionController@edit')->name('Sections.editt');



});



});












