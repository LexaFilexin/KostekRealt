@extends('layouts.headeer')

@section('title')
    <title>Вход/Регистрация KOSTEKREALT</title>
@endsection('content')

@section('content')
            <div id="top">
                <h1>Агенство недвижимости<br><span style="letter-spacing: -0.075em;">KOSTEK</span><span style="color: #ff5100; font-weight: 600; letter-spacing: 0.075em;">REALT</span></h1>
                <h3></h3>

                    <div id="login-form">
                        <h2>Вход</h2>

                        <fieldset>
                            <form action="javascript:void(0);" method="get">
                                <input type="email" required value="Ваш email" onBlur="if(this.value=='')this.value='Ваш email'" onFocus="if(this.value=='Ваш email')this.value='' ">
                                <input type="password" required value="Пароль" onBlur="if(this.value=='')this.value='Пароль'" onFocus="if(this.value=='Пароль')this.value='' ">
                                <div class="form_footer">
                                    <div class="forgot">
                                        <span class="info">?</span><a href="#">Забыли пароль?</a>
                                    </div>

                                    <input type="submit" value="ВОЙТИ">
                                </div>

                            </form>
                        </fieldset>

                    </div>
            </div>
                <footer>
                    <div class="top_footer">
                        <div class="bottom_ref"></div>
                            <span class="sp2">
                            <img src="img/logo.png" width="80" height="66">
                        </span>
                        <span class="sp3">
                            <a href="index#main" title="Возможности" onclick="slowScroll('#main')">О нас<br></a>
                            <a href="index#overview" title="Преимущества" onclick="slowScroll('#overview')">Предложения<br></a>
                            <a href="index#faq" title="Контакты" onclick="slowScroll('#faq')">Партнеры<br></a>
                            <a href="/unnamedpage" title="комментарий">Контакты</a>
                        </span>
                        <span class="sp4"></span>
                            <span class="sp3">
                                <a href="/unnamedpage">Избы<br></a>
                                <a href="/unnamedpage">Дома в стиле модерн<br></a>
                                <a href="/unnamedpage">Загородные дома<br></a>
                                <a href="/unnamedpage">С/х участки</a>
                            </span>
                            <span class="sp3">
                                <a href="/unnamedpage">Жильё в черте города<br></a>
                                <a href="/unnamedpage">Коттеджи<br></a>
                                <a href="/unnamedpage">Квартиры<br></a>
                                <a href="/unnamedpage">Все предложения</a>
                            </span>

                    </div>

                        <div class="bottom_footer">
                            <span class="cr">©2020. KOSTEKREALT. Все права защищены.</span>
                        </div>
                    </div>

                </footer>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

            <script>
                function slowScroll(id) {
                    $('html, body').animate({
                        scrollTop: $(id).offset().top
                    }, 500);
                }

                $(document).on("scroll", function () {
                    if($(window).scrollTop() === 0)
                        $("header").removeClass("fixed");
                    else
                        $("header").attr("class", "fixed");
                });
            </script>
@endsection('content')
