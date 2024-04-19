<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// route saya
Route::get('/about', function () {
    return '<h1>Welcome</h1>'
        . 'Selamat datang di webapp saya';
});

// buat route basic introduce yourself
Route::get('/biodata', function () {
    return '<h1>My Biodata</h1>'
        . '<table>'
        . '<tr>'
        . '<td>Nama</td> '
        . '<td>:</td> '
        . '<td>Moh Bisma Fzarahim</td> '
        . '</tr>'
        . '<tr>'
        . '<td>TTL</td> '
        . '<td>:</td> '
        . '<td>Bandung , 13 Jan 2006</td> '
        . '</tr>'
        . '<tr>'
        . '<td>Agama</td> '
        . '<td>:</td> '
        . '<td>Islam</td> '
        . '</tr>'
        . '<tr>'
        . '<td>Cita-cita</td> '
        . '<td>:</td> '
        . '<td>Pilot</td> '
        . '</tr>'
        . '<tr>'
        . '<td>Sekolah &nbsp;</td> '
        . '<td>:</td> '
        . '<td>SMK ASSALAAM BANDUNG</td> '
        . '</tr>'
        . '</table>'

    ;
});

// route basic passing data to view
Route::get('/animals', function () {
    $kings = "Capybara";
    $animals = ["Monkey", "Donkey", "Dragonfly", "Lion", "Dragon", "Griffin", "Unicorn"];
    return view('animals_page', compact('kings', 'animals'));
});

Route::get('/fruit', function () {
    $fruit = ["apple", "grape", "watermelon", "dragonfruit"];
    return view('fruit_page', compact('fruit'));
});

// route parameters ditandai dengan {}
Route::get('/product/{name}', function ($name) {
    return "product : $name";
});

// tugasss
Route::get('/bmi/{name}/{bb}/{tb}', function ($name, $bb, $tb) {
    $bmi = $bb / (($tb / 100) ** 2);

    if ($bmi <= 18.5) {
        $ket = "<b>Kamu Kurus</b>";
    } else if ($bmi > 18.5 && $bmi <= 25) {
        $ket = "<b>Kamu Ideal";
    } else if ($bmi > 25 && $bmi <= 30) {
        $ket = "<b>Kamu Gemuk</b>";
    } else {
        $ket = "<b>Kamu Obesitas</b>";
    }

    return
        "<h1>BMI CALCULATOR</h1>" .
        "Nama : $name <br>" .
        "BB : $bb <br>" .
        "TB : $tb <br>" .
        "BMI : $bmi <br>" .
        "keterangan : $ket";

});

// Route Optimal Parameter -> dtandai dengan ?
Route::get('/myname/{name?}', function ($a = "abdu") {
    return "my name is $a";
});
