<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Request を使える状態にしている
use Illuminate\Http\Response; // Response を使える状態にしている
use App\Http\Requests\HelloRequest; // 作成したフォームリクエストを使える状態にしている

class HelloController extends Controller
{

    public function index() { // アクションメソッド

        // 第2引数の配列の key がテンプレートで使用できる変数名、 value がその値
        $data = [
            'msg' => '',
        ];
        return view('hello.index', $data);
    }

    // 渡される引数を Request から HelloRequest に変更することで HelloRequest で作成したバリデーションのルールを適用させる
    public function post(HelloRequest $request) {
        // テンプレートの指定した name 属性を $request-> するとフォームで送信された値を取得できる
        $msg = $request->msg;
        $data = [
            'msg' => $msg,
        ];
        return view('hello.index', $data);
    }
}
