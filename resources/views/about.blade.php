<!DOCTYPE html>
    <html lang="ru">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Агенство недвижимости KOSTEKREALT</title>
            <link rel="stylesheet" href="css/aboutstyle.css">
        </head>

        <body>

            <header>
                <div id="logo">
                    <a href="/index"><img src="img/logo.png" width="100" height="86"></a>
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

            <div id="top">
                <h1>Агенство недвижимости<br><span style="letter-spacing: -0.075em;">KOSTEK</span><span style="color: #ff5100; font-weight: 600; letter-spacing: 0.075em;">REALT</span></h1>
                <h3></h3>


            <div class="aboutcompany">
            	<div class="abouttxt">
            		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum itaque, accusamus iure architecto tempora fugit quos saepe provident enim delectus sit officiis laboriosam labore aliquid deserunt assumenda natus aperiam rerum ex! Ut vel tenetur nam sint obcaecati ipsa ducimus incidunt cumque dicta molestias laboriosam minus, fugit tempore temporibus quas fuga. Ad ipsum provident tenetur nam recusandae consequuntur quibusdam, tempora nihil fuga quaerat, corporis totam tempore placeat laboriosam perferendis blanditiis repellendus! Dolorum, similique aperiam animi nesciunt modi, nulla, commodi quia officiis corporis excepturi cupiditate. Natus earum ducimus quis quaerat obcaecati provident esse deleniti ab incidunt ad. Accusantium numquam, tempora optio enim.
            	</div>
            	<div class="map">
            		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2440.7102969482007!2d104.25131231537155!3d52.2849612613741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5da824be7ea6a293%3A0x2a53ff1ba8317dd4!2z0YPQuy4g0J_Rg9GI0LrQuNC90LAsIDcvNCwg0JjRgNC60YPRgtGB0LosINCY0YDQutGD0YLRgdC60LDRjyDQvtCx0LsuLCA2NjQwMDU!5e0!3m2!1sru!2sru!4v1591551909729!5m2!1sru!2sru" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            	</div>

            </div>

                <footer></div>
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
        </body>
    </html>