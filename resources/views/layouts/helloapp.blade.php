<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            font-size: 16pt;
            color: #999;
            margin: 5px;
        }
        h1 {
            font-size: 50px;
            text-align: right;
            color: #f6f6f6;
            margin: -20px 0 -30px 0;
            letter-spacing: -4pt;
        }
        ul {
            font-size: 12pt;
        }
        hr {
            margin: 25px 100px;
            border-top: 1px dashed #ddd;
        }
        .menu-title {
            font-size: 14pt;
            font-weight: bold;
            margin: 0;
        }
        .content {
            margin: 10px;
        }
        .footer {
            text-align: right;
            font-size: 10px;
            border-bottom: solid 1px #ccc;
        }
    </style>
</head>
<body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <ul>
        <p class="menu-title">※メニュー</p>
        <li>@show</li>
    </ul>
    <hr size='1'>
    <div class="content">
        @yield('content')
    </div>
    <div class="footer">
        @yield('footer')
    </div>
</body>
</html>
