<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard_transacoes');
});

Route::get('nova-entrada', function () {
    return view('nova_entrada');
});
