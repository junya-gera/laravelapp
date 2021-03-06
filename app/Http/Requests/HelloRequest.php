<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    // フォームリクエストの利用が許可されているかを示す。 true なら許可
    public function authorize()
    {
        // パスが hello だったらフォームリクエストが利用できる
        if ($this->path() == 'hello')
        {
            return true;
        } else {
            return false;
        }
    }

    // バリデーションの検証ルールを設定する
    public function rules()
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
    }
}
