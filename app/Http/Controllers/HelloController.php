<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Request を使える状態にしている
use Illuminate\Http\Response; // Response を使える状態にしている

class HelloController extends Controller
{

    public function index(Request $request, Response $response) { // アクションメソッド
        $html = <<<EOF
<html>
<head>
<title>Hello/index</title>
</head>
<body>
<h1>Hello</h1>
<h3>Request</h3>
<pre>{$request}</pre>
<h3>Response</h3>
<pre>{$response}</pre>

</body>
</html>
EOF;
        $response->setContent($html);
        return $response;
    }


}
