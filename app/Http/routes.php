<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]

    ]
    , function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', function()
    {
        return View::make('home');
    });

    Route::get(LaravelLocalization::transRoute('menu.conocenos'),[
        'as' => 'conocenos', 'uses' => 'VolunteersController@showVolunteers'
    ]);

    Route::get(LaravelLocalization::transRoute('menu.como-trabajamos'),function(){
        return View::make('como-trabajamos');
    });

    Route::get(LaravelLocalization::transRoute('menu.colabora'),function(){
        return View::make('colabora');
    });

    Route::get(LaravelLocalization::transRoute('menu.nuestros-vinculos'),function(){
        return View::make('nuestros-vinculos');
    });

    Route::get(LaravelLocalization::transRoute('menu.contacto'),[
        'as' => 'contacto', 'uses' => 'ContactoController@index'
    ]);
    Route::post(LaravelLocalization::transRoute('menu.contacto'),'ContactoController@store');

    Route::get(LaravelLocalization::transRoute('menu.galerias'),function(){
        return View::make('galeria');
    });

    Route::get('/gracias',function(){
        return View::make('gracias');
    });

    Route::get('/aviso-de-privacidad',function(){
        return View::make('aviso-de-privacidad');
    });

    Route::get(LaravelLocalization::transRoute('menu.ayudalos'),function(){
        return View::make('programas.ayudalos-a-seguir');
    });
    Route::get(LaravelLocalization::transRoute('menu.frio'),function(){
        return View::make('programas.vive-mejor-sin-frio');
    });
    Route::get(LaravelLocalization::transRoute('menu.sonrian'),function(){
        return View::make('programas.haz-que-sonrian');
    });

    Route::get('minicv/{minicv}',['as' => 'minicv', function($minicv) {

        return view('minicv.' . $minicv);
        //return "".$minicv;
    }]);
});

