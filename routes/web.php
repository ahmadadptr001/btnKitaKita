<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Beranda', [
        'title' => 'Beranda | BtnKitaKita',
        'beranda' => 'active',
        'tentang' => '',
        'lokasi' => ''
    ]);
});

