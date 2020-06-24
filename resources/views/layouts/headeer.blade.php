<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="css/indexstyle.css">
</head>

<body>

<header>
    <div id="logo"  onclick="slowScroll('#top')">
        <a href="/index#top"><img src="img/logo.png" width="100" height="86"></a>
    </div>

    <div id="about">
        <a href="index#main" title="Возможности" onclick="slowScroll('#main')">О нас</a>
        <a href="index#overview" title="Преимущества" onclick="slowScroll('#overview')">Предложения</a>
        <a href="index#faq" title="Контакты" onclick="slowScroll('#faq')">Партнеры</a>
        <a href="/unnamedpage" title="комментарий">Контакты</a>
    </div>

    <div class="about_contact">
        <div class="number">
            <div class="num_ico">
                <img src="img/phone_ico.png">
            </div>

            <div class="num">
                <p>8 (950) 960 97 98</p>
            </div>
        </div>

        <div class="logbutton">
            <div class="log">
                <a href="/Registration" title="комментарий">Вход </a>
            </div>

            <div class="log_ico">
                <img src="img/login_ico.png">
            </div>
        </div>
    </div>
</header>

    @yield('content')

</body>
</html>
