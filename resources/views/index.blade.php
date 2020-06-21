<!DOCTYPE html>
    <html lang="ru">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Агенство недвижимости KOSTEKREALT</title>
            <link rel="stylesheet" href="css/indexstyle.css">
        </head>

        <body>

            <header>
                <div id="logo" onclick="slowScroll('#top')">
                    <span><img src="img/logo.png" width="100" height="86"></span>
                </div>

                <div id="about">
                    <a href="#" title="Возможности" onclick="slowScroll('#main')">О нас</a>
                    <a href="#" title="Преимущества" onclick="slowScroll('#overview')">Предложения</a>
                    <a href="#" title="Контакты" onclick="slowScroll('#faq')">Партнеры</a>
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

                <div class="search">
                	<div class="search_list">
						<form>
							<select name="location">
							    <option value="l1">В черте города</option>
							    <option value="l2">За городом</option>
							</select>
						</form>
                	</div>

                	<div class="search_list">
                		<form>
							<select name="type">
						    	<option value="t1">Дом</option>
						    	<option value="t2">Квартира</option>
						    	<option value="t3">Участок</option>
						   </select>
						</form>
                	</div>

                	<div class="txtform">
                		<form action="handler.php">
   							<input maxlength="255" size="40" value="Например: Загородный дом">
  						</form>
                	</div>

                	<div class="search_button">
                		<form id="search" action="do.php">
							<input type="submit" value="Найти" />
						</form>
                	</div>
                </div>

                <div class="teg_butons">
                	<div class="tb_lvl1">
                		<input type="submit" value="Избы" />
                		<input type="submit" value="Сехохозяйственный участок" />
                		<input type="submit" value="Жильё в черте города" />
                		<input type="submit" value="Загородный дом" />
                		<input type="submit" value="Квартиры" />

                		<input type="submit" value="Дома в стиле модерн" />
                		<input type="submit" value="Коттедж" />
                		<input type="submit" value="Квартиры премиум класса" />
                		<input type="submit" value="Все предложения" />
                	</div>
                </div>
            </div>

            <div id="main">
                <div class="intro">
                    <h2>Мы знаем своё дело</h2>
                    <span>Более шести лет на рынке риэлторских услуг, нами продано более 30 тыс. квадратных метров жилплощади и сотни довольных клиентов.Никаких предоплат, Удобство, Работа на результат, вместе - это KOSTEKREALT<br><br><br><a href="/about" title="Страница о нас">О нас подробнее</a></span>

                    <div class="obj">
                    	<div class="abobj1">
                    		<span2>864</span2>

                    		<div class="abobj1t">
                    			<p>Проданных<br>объекта</p>
                    		</div>
                    	</div>

                    	<div class="abobj2">
                    		<span2>32674</span2>

                    		<div class="abobj1t">
                    			<p>М.кв. недвижимости<br>продано за время<br>нашей работы</p>
                    		</div>
                    	</div>
                    	<div class="abobj3">
                    		<span2><6 лет</span2>

                    		<div class="abobj1t">
                    			<p>На рынке<br>рядом с вами!</p>
                    		</div>
                    	</div>
                    </div>

                   

                </div>

                <div class="text">
                    <h3>Наш канал на YouTube</h3>
                    <iframe width="500" height="300" src="https://www.youtube.com/embed/dA0unuzV-g8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <div class="yttxt">
                    	<span3>Наш канал содержит много полезной информации по работе с<br>недвижимостью и возникающих нюансов </span3>
                    </div>

                    <div class="yt_button">
                    	<div class="yt_ref">
                    		<a href="https://www.youtube.com/" target="_blank" title="">Посетить канал</a>
                    	</div>

                    	<div class="yt_ico">
                    		<img src="img/yt_ico.png">
                    	</div>
                    </div>
                </div>

            </div>

            <div id="overview">
                <h2>Последние предложения</h2>

	            <div class="card">    
	                <div class="img">
	                    <img src="img/forest_house.jpg" alt="">
	                    <h2><span>Загородный дом, 64кв.м., погреб., 47км. от города</span></h2>
	                    <a href="/unnamedpage" title=""><br>Подробнее</a>
	                </div>

	                <div class="img">
	                    <img src="img/modern_house.jpg" alt="">
	                    <h2><span>Загородный дом модерн, 119кв.м., 14км. от города</span></h2>
	                    <a href="/unnamedpage" title=""><br>Подробнее</a>
	                </div>

	                <div class="img">
	                    <img src="img/luxury_house.jpg" alt="">
	                    <h2><span>Усадьба, 308 кв.м., в черте города</span></h2>
	                    <a href="/unnamedpage" title=""><br>Подробнее</a>
	                </div>
	            </div>

            </div>

            <div id="faq">
            	<span class="sp1">Наши партнеры<span class="bord"></span></span>
				<div class="partners">
	                <div class="partner_logo">
		                    <img src="img/partner_logo1.png" alt="" width="200" height="173">
		                    <p><a href="/unnamedpage" title=""><br>АН Слобода</a></p>
		            </div>

	                <div class="partner_logo">
		                    <img src="img/partner_logo2.png" alt="" width="200" height="173">
		                    <p><a href="/unnamedpage" title=""><br>АН Каскад</a></p>
		            </div>

	                <div class="partner_logo">
		                    <img src="img/partner_logo3.png" alt="" width="200" height="173">
		                    <p><a href="/unnamedpage" title=""><br>АН StreetHouse</a></p>
		            </div>

		            <div class="partner_logo">
		                    <img src="img/partner_logo4.png" alt="" width="200" height="173">
		                    <p><a href="/unnamedpage" title=""><br>АН gorod</a></p>
		            </div>
		        </div>
                <div class="footer"></div>
	                <div class="top_footer">
	                	<div class="bottom_ref"></div>
	                		<span class="sp2">
                			<img src="img/logo.png" width="80" height="66">
                		</span>
	                	<span class="sp3">
	                		<a href="#" title="Возможности" onclick="slowScroll('#main')">О нас<br></a>
	                    	<a href="#" title="Преимущества" onclick="slowScroll('#overview')">Предложения<br></a>
	                    	<a href="#" title="Контакты" onclick="slowScroll('#faq')">Партнеры<br></a>
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

	            </div>

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
