<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('hello/{msg}', function() use ($msg) {
    {
$html = <<<EOF
<html>
<head>
<title>Hello</title>
</head>
<body>
<h1>Hello!!!</h1>
</body>
</html>
EOF;
    return $html;
    }
});
