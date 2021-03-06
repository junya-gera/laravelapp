<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    // フォームリクエストの利用が許可されているかを示す。 true なら許可
    public function authorize()
    {
        return false;
    }

    // バリデーションの検証ルールを設定する
    public function rules()
    {
        return [
            //
        ];
    }
}
