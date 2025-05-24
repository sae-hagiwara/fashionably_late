<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ancizar+Serif:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
    <style>
        .header {
            background:#fff;
        }
        .header__inner {
            margin: 5px auto;
            padding: 8px 15px;
            border-bottom: solid 1px #DCD3C8;
        }
        .header__logo {
            font-family: "Ancizar Serif", serif;
            font-size: 30px;
            font-weight: 950;
            font-style: normal;
            text-align: center;
            color:#867E71;
        }
        .move {
            background-color: #F6F6F6;
            border: solid 1px #DCD3C8;
            color: #DCD3C8;
            font-size: 10px;
        }
        main {
            /*background-color:#F1ECE8;*/
        }
        .title__inner {
            margin: 5px auto;
            padding: 8px 15px;
        }
        .title__logo {
            font-family: "Ancizar Serif", serif;
            font-size: 30px;
            font-weight: 950;
            font-style: normal;
            text-align: center;
            color:#867E71;
        }
        .content {
            text-align: center;
            overflow-x: scroll;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
            @yield('move')
        </div>
    </header>
    <main>
        <div class="title__inner">
            <h1 class="title__logo">@yield('title')</h1>
        </div>
        <div class="content">@yield('content')</div>
    </main>
</body>
</html>