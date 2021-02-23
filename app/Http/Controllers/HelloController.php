<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Request を使える状態にしている

class HelloController extends Controller
{
    public function index($id='null', $pass='null') { // アクションメソッド
        return <<<EOF
<html>
<head>
<title>Hello/index</title>
</head>
<body>
<h1>Index</h1>
<p>これは、 Hello コントローラの index アクションです。</p>
<p>id:   {$id}</p>
<p>pass: {$pass}</p>
</body>
</html>
EOF;

    }
}
