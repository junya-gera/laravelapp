<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello/Index</title>
</head>
<body>
    @extends('layouts.helloapp')

    @section('title', 'index')

    @section('menubar')
        @parent
        インデックスページ
    @endsection

    @section('content')
        <p>{{ $msg }}</p>
        @if (count($errors) > 0)
        <p>入力に問題があります。再入力してください。</p>
        @endif
        <table>
        <form action="/hello" method="post">
            {{ csrf_field() }}
            <!-- name のバリデーションエラーが発生しているかをチェック -->
            @if ($errors->has('name'))
            <!-- name の最初のエラーメッセージを呼び出す -->
            <tr><th>ERROR</th><td>{{ $errors->first('name') }}</td></tr>
            @endif
            <tr><th>name: </th><td><input type="text" name="name" value="{{ old('name')}}"></td></tr>
            {{ csrf_field() }}
            @if ($errors->has('mail'))
            <tr><th>ERROR</th><td>{{ $errors->first('mail') }}</td></tr>
            @endif
            <tr><th>mail: </th><td><input type="text" name="mail" value="{{ old('mail')}}"></td></tr>
            {{ csrf_field() }}
            @if ($errors->has('age'))
            <tr><th>ERROR</th><td>{{ $errors->first('age') }}</td></tr>
            @endif
            <tr><th>age: </th><td><input type="text" name="age" value="{{ old('age')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </form>
        </table>
    @endsection

    @section('footer')
        copyright 2021 junya.
    @endsection
</body>
</html>
