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

Route::get('/{locale}', function ($locale) {

    App::setLocale($locale);

    // $res = App\Language::all();

    // $res = App\Article::all();

    // $res = App\Article::where([
    //     'title' => 'S1', 
    //     'locale' => 'en'
    //     ])->first();

    // $res = App\Article::where([
    //     'title' => 'S1', 
    //     'locale' => 'si'
    //     ])->first();

    echo __('messages.welcome');
    

    $res = App\Article::where([
        'title' => 'S1', 
        'locale' => $locale
        ])->first();


    $headers = array (
        'Content-Type' => 'application/json; charset=UTF-8',
        'charset' => 'utf-8'
    );

    // return response()->json($res, 200, $headers, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

});

Route::get('/tables/language', function () {

    $lang = new App\Language;
    $lang->locale = 'en';
    $lang->name = 'English';
    $lang->locale_name = 'English';
    $lang->save();

    $lang = new App\Language;
    $lang->locale = 'si';
    $lang->name = 'Sinhala';
    $lang->locale_name = 'සිංහල';
    $lang->save();

    return [1];
});

Route::get('/tables/article', function () {

    $lang = new App\Article;
    $lang->locale = 'en';
    $lang->title = 'S1';
    $lang->body = 'Sample';
    $lang->save();

    $lang = new App\Article;
    $lang->locale = 'si';
    $lang->title = 'S1';
    $lang->body = 'අ ආ';
    $lang->save();

    $lang = new App\Article;
    $lang->locale = 'en';
    $lang->title = 'S2';
    $lang->body = 'Sample 2';
    $lang->save();

    $lang = new App\Article;
    $lang->locale = 'si';
    $lang->title = 'S2';
    $lang->body = 'අ ආ 2';
    $lang->save();

    return [1];
});

