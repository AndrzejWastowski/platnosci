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

Route::get('/', function () {
    return view('index');
});


#section search
Route::post('search', 'Search\SearchController@index')->name('search');
Route::any('search/{section?}', 'Search\SearchController@searchSection')->name('searchSection');

#sekcja odpowiedzialna za informacje dodatkowe - regulaminy / rodo / itd..
Route::get('/kontakt', function () {
    return view('Kontakt');
})->name('contact');
Route::get('/regulamin_strony', function () {
    return view('Regulaminy.regulaminStrony');
})->name('regulaminStrony');
Route::get('/cookies', function () {
    return view('Regulaminy.Cookies');
})->name('cookies');
Route::get('/politykaPrywatnosci', function () {
    return view('Regulaminy.politykaPrywatnosci');
})->name('politykaPrywatnosci');

Route::get('/pomoc', 'Information\HelpController@index')->name('help');
Route::get('/rodo', function () {
    return view('Regulaminy.rodo');
})->name('rodo');

#sekcja odpowiedzialna za osbługę użytkownika

Route::get('/user/moje_ogloszenia', 'Users\mojeOgloszenia@index');
Route::get('/user/{name?}', function ($name = 'domyslny') {
    return $name;
});

Route::get('/user', function ($name = null) {
    return 'routing';
});
      
Auth::routes();


Route::get('/myPayments', 'Payments@index')->name('myPayments');
Route::get('/home', 'HomeController@index')->name('home');
