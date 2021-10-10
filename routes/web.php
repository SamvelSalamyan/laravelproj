<?php



//Route::get('/', function () {
//    return view('home');
//})->name('home');
Route::get('/', 'HomeController@index')->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/contact/all/{id}',
    'ContactController@showOneMessage'
)->name('contact-data-one');

Route::get('/contact/all/{id}/update',
    'ContactController@updateMessage'
)->name('contact-update');

Route::post('/contact/all/{id}/update',
    'ContactController@updateMessageSubmit'
)->name('contact-update-submit');

Route::get('/contact/all/{id}/delete',
    'ContactController@deleteMessage'
)->name('contact-delete');

Route::get('/contact/all','ContactController@allData')->name('contact-data');

Route::post('/contact/submit','ContactController@submit')->middleware('auth')->name('contact-form');



Route::name('user.')->group(function(){
    Route::view('/private','private')->middleware('auth')->name('private');

    Route::get('/login',function (){
        if(Auth::check()){
           // return redirect(route('user.private'));
            return redirect(route('home
            '));
        }
       return view('login');
    })->name('login');

    Route::post('/login',[\App\Http\Controllers\loginController::class,'login']);

    Route::get('/logout',function (){
        Auth::logout();
        return redirect('/');
    })->name('logout');

    Route::get('/registration',function (){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
       return view('registration');
    })->name('registration');

    Route::post('/registration',[\App\Http\Controllers\RegisterController::class,'save']);

});

