<!DOCTYPE html>
<html lang="ro">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">


	<title>Document</title>
	<?php
		wp_head(  );
	?>

</head>

<body>
	<div class="wrapper">
		<div class="phone__wrapper">
			<div class="phone">
				<a href="tel:+37367111905" class="phone__link">
					<img src="img/phone.png" alt="" class="phone__img">
				</a></div>
		</div>

		<header class="header">
			<div class='container'>
				<div class="header__body">

					<!-- <a href="#" class="header__logo">
							<img src="img/logo.jpg" alt="">
						</a> -->
					<div class="header__burger">

						<span></span>
						<p class="menu">Menu</p>
					</div>
					<nav class="header__menu">
						<ul class="header__list">
							<li>
								<a href="" class="header__link header__link__active">Start</a>
							</li>
							<li>
								<a href="" class="header__link">Blog</a>
							</li>
							<li>
								<a href="" class="header__link">Contacte</a>
							</li>
							<li>
								<a href="" class="header__link">Despre noi</a>
							</li>
							<li>
								<a href="" class="header__link">067854854</a>
							</li>
							<li>
								<a href="" class="header__link">
									<span class="lang">
										<img src="img/lang.png" alt="" class="lang__logo">
										Ru
									</span>
								</a>
							</li>
						</ul>
					</nav>
					<div class="header__search search">
						<input type="search" id="site-search" name="q" aria-label="Search through site content"
							class="search__input">
						<button class="search__button">
							<img src="img/search.png" alt="Caută" class="search__img">
						</button>

					</div>
				</div>
			</div>
		</header>

		<div class="fullscreen fullscreen_one" style="background-image:url('img/sunflower.jpg')">
			<div class="fullscreen__body">
				<span class="space">
					<a href="#about__oil" class="fullscreen__link">
						<h2 class="fullscreen__title">Ce ulei să aleg?<button
								class="fullscreen__title__button"><span>Află>></span></button></h2>

					</a> </span>
				<span class="space">
					<a href="#storage__oil" class="fullscreen__link">
						<h2 class="fullscreen__title">Cum să păstrez uleiul viu?<button
								class="fullscreen__title__button"><span>Află>></span></button></h2>

					</a></span>
				<span class="space">
					<a href="#contact" class="fullscreen__link">
						<h2 class="fullscreen__title">Cum să ne contactați? <button
								class="fullscreen__title__button"><span>Află></span>></button></h2>
					</a>
				</span>
			</div>
		</div>
		<div class="content">
			<h2 class="title__seed"> Unele semințe din care presăm ulei:</h2>
			<div class="seed">
				<a href="#" class="seed__link">
					<div class="seed__one">
						<div class="wrapper__seed__img"> <img src="img/dovleac.jpg" alt="De dovleac" class="seed__img">
						</div>
						<span class="seed__text">De dovleac</span>
					</div>
				</a>
				<a href="#" class="seed__link">
					<div class="seed__one">
						<div class="wrapper__seed__img">
							<img src="img/in.jpg" alt="De In" class="seed__img">
						</div>

						<span class="seed__text">De In</span>
					</div>
				</a>
				<a href="#" class="seed__link">
					<div class="seed__one">
						<div class="wrapper__seed__img">
							<img src="img/susan.jpg" alt="De Susan" class="seed__img">
						</div>

						<span class="seed__text">De Susan</span>
					</div>
				</a>
				<a href="#" class="seed__link">
					<div class="seed__one">
						<div class="wrapper__seed__img">
							<img src="img/chimen_negru.jpg" alt="De chimen Negru" class="seed__img">
						</div>
						<span class="seed__text">De chimen Negru</span>
					</div>
				</a>
				<a href="#" class="seed__link">
					<div class="seed__one">
						<div class="wrapper__seed__img">
							<img src="img/cinepa.jpg" alt="De cînepă" class="seed__img">
						</div>
						<span class="seed__text">De cînepă</span>
					</div>
				</a>
				<a href="#" class="seed__link">
					<div class="seed__one">
						<div class="wrapper__seed__img">
							<img src="img/armurariu.jpg" alt="De armurariu" class="seed__img">
						</div>
						<span class="seed__text">De armurariu</span>
					</div>
				</a>
			</div>
		</div>
		<div class="container">
			<h2 class="container__title">Procesul de presare a uleiului la rece</h2>
			<div class="container__video">
				<iframe width="720" height="405" src="https://www.youtube.com/embed/WNr3ziyGnbM?start=26" frameborder="0"
					allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="articles">
			<img src="img/articles_1.jpg" alt="" class="articles__img articles__element">
			<div class="articles__small articles__element" id="about__oil">
				<h2 class="articles__title">Beneficiile uleiului viu</h2>
				<p class="articles__text">Uleiul vegetal, care a fost obținut prin metoda tradițională (presare manuală a
					semințelor crude) este baza multor benefici: Este un aliment bogat în nutrienți, cum ar fi: Omega 3,
					Omega 6, Omega 9 vitaminele А, Д, Е, К, В1, В2, și PP , și multe minerale etc. Se știe că uleiul, ca și
					apa este un bun dizolvant. Deci prezența lui este vitală pentru asimilarea majorității vitaminelor.
				</p>
				<a href="#" class="articles__link">
					<span class="articles__buttons">Citește mai departe...</span>
				</a>
			</div>
			<img src="img/articles_2.jpg" alt="" class="articles__img articles__element">
			<div class="articles__small articles__element" id="storage__oil">
				<h2 class="articles__title">Cum sa păstrezi uleiul?</h2>
				<p class="articles__text">Pentru a păstra uleiul viu este nevoie de respectat cîteva reguli: Feriți de
					lumină Feriți de căldură Reduceți maximal contactul cu aerul Evitați contactul cu metale Recipientul în
					care se păstrează uleiul să fie uscat și steri
				</p>
				<a href="#" class="articles__link">
					<span class="articles__buttons ">Citește mai departe... </span>
				</a>
			</div>

		</div>
		<div class="green__line"></div>
		<div class="wrraper__contacts" id="contact">
			<div class="contacts">
				<div class="contacts__tel">
					<h3 class="contacts__title"> Luați legatura cu noi: </h3>
					<a href="tel:+37367854854" class="contacts__tel__link">&#9742 Sunați - 067854854</a>
					<div class="social">
						<h3 class="social__title">Sau scrieți-ne pe rețele de socializare:</h3>
						<span class="facebook">
							<a href="#" class="social__link">
								<img src="img/facebook  1.jpg" alt="facebook" class="social__img">
							</a>
						</span>
						<span class="telegram">
							<a href="#" class="social__link">
								<img src="img/telegram .png" alt="telegram" class="social__img">
							</a>
						</span>

					</div>
				</div>
				<div class="contacts__form">
					<h3 class="contacts__form__title">Aveti o intrebare</h3>
					<form action="#">
						<label for="fname">Numele</label>
						<input type="text" id="fname" name="firstname" placeholder="Introduceti numele..."
							class="input__fname">

						<label for="lname">Telefonul</label>
						<input type="tel" id="phone" name="phone" placeholder="Telefonul Dumneavoastra..."
							class="input__phone">


						<label for="subject">Mesajul</label>
						<textarea id="subject" name="subject" placeholder="Scrieti mesajul.."
							class="textarea__subject"></textarea>

						<input type="submit" value="Trimite" class="input__submit">
					</form>
				</div>
			</div>
		</div>

	</div>
	<footer class="footer">
		<div class="footer__wrapper">
			<div class="footer__articles">
				<h3 class="footer__articles__title">Articole</h3>
				<span>
					<li>lorem</li>
					<li>lorem</li>
					<li>lorem</li>
					<li>lorem</li>
				</span>
			</div>
			<div class="footer__seeds">
				<h3 class="footer__seeds__title">Ulei din seminte de</h3>
				<span>
					<li>lorem dfjkdh </li>
					<li>lorem cdscdsv</li>
					<li>lorem dscdscds </li>
					<li>lorem dscdscds</li>
				</span>
			</div>
			<div class="footer__about">
				<h3 class="footer__about__title">Despre noi:</h3>
				<img src="img/about.jpg" alt="Despre noi">
			</div>
		</div>

	</footer>

	<!-- Подключаем jQuery -->
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
	<!-- Подключаем файл JS скриптов -->
	<?php
		wp_footer(  );
	?>
</body>

</html>