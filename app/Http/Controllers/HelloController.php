<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Request を使える状態にしている
use Illuminate\Http\Response; // Response を使える状態にしている

class HelloController extends Controller
{

    public function index() { // アクションメソッド

        // 第2引数の配列の key がテンプレートで使用できる変数名、 value がその値
        $data = [
            'msg' => 'これは Blade を利用したサンプルです',
            'name' => 'おこちゃん',
        ];
        return view('hello.index', $data);
    }
}
