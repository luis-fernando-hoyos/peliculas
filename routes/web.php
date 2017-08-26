<?php

Route::get('/', function () {
    return view('index');
});
Auth::routes();


/*Route::get('/index', function () {
    return view('bienvenida.index');
});

