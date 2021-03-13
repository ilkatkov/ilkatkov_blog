<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/styles/style.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="header_div">
        <div class="logo_div">
            <img class="logo_img" src="/images/katkov.jpg" alt="Катков Илья">
            <p class="logo_label">@yield('title')</p>
        </div>
        @yield('content')

</body>

</html>