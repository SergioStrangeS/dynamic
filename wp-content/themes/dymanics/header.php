<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<!DOCTYPE html>
<html
	class="js flexbox no-touch rgba backgroundsize cssanimations csscolumns csstransforms csstransforms3d csstransitions video audio svg inlinesvg svgclippaths csscalc scriptasync formvalidation no-stylescoped svgfilters"
	lang="ru-RU">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1">

	<title>Фотоконкурс / НПП «Динамика»</title>


	<link rel="icon" type="image/x-icon" href="https://dynamics.com.ru/favicontest.svg">
	<meta name="yandex-verification" content="37674e1465d88a60">


	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Статьи / НПП «Динамика»">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<!-- Open Graph Protocol meta tags. Used mostly for Facebook, more here http://ogp.me/ -->
	<meta property="og:locale" content="ru">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Статьи">
	<meta property="og:description" content="">
	<meta property="og:site_name" content="НПП «Динамика»">

	<!-- Url of your website -->
	<meta property="og:url" content="/pages">

	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/css.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" type="text/css"
		media="all">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/template.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<?php wp_head(); ?>
</head>

<body class="page-8 section-pages subsection-8">
	<div id="page_wrapper" style="height: auto;">

		<header id="header" class="site-header style1 cta_button" data-header-style="1">
			<div class="kl-header-bg"></div>

			<div class="container siteheader-container">
				<div class="kl-top-header clearfix">
					<div class="header-leftside-container ">
						<span class="kl-header-toptext">
							<a href="tel:+7 8352 32-52-00" class="fw-bold">+7 8352 &nbsp;32-52-00</a>
						</span>
					</div>
				</div>

				<div class="separator"></div>




				<div id="zn-res-menuwrapper"><a href="#" class="zn-res-trigger zn-header-icon"></a></div>

				<div id="main-menu" class="main-nav zn_mega_wrapper ">

					<ul id="menu-main-menu" class="main-menu zn_mega_menu">
						<li class="menu-item first"><a href="https://dynamics.com.ru/" class="first"><i
									class="bi bi-house-fill"></i></a></li>
						<li class="menu-item"><a href="https://dynamics.com.ru/firm">О фирме</a>
							<ul class="sub-menu clearfix">
								<li class="menu-item first"><a href="https://dynamics.com.ru/firm/klienty"
										class="first">Клиенты</a></li>
								<li class="menu-item "><a href="https://dynamics.com.ru/firm/istoriya">История</a></li>
								<li class="menu-item "><a href="https://dynamics.com.ru/firm/responses">Отзывы</a></li>
								<li class="menu-item "><a href="https://dynamics.com.ru/firm/partners">Дилеры</a></li>
								<li class="menu-item "><a href="https://dynamics.com.ru/firm/vacancy">Вакансии</a></li>
								<li class="menu-item last"><a href="https://dynamics.com.ru/firm/mir-vokrug-nas"
										class="last" Статья="">Мир вокруг нас</a></li>
							</ul>
						</li>
						<li class="menu-item"><a href="https://dynamics.com.ru/news" новость="">Новости</a></li>
						<li class="menu-item"><a href="https://dynamics.com.ru/pages" Статья="">Статьи</a></li>
						<li class="menu-item"><a href="https://dynamics.com.ru/production">Продукция</a>
							<ul class="sub-menu clearfix">
								<li class="menu-item first"><a href="https://dynamics.com.ru/production/kompleks-51-61"
										class="first">Проверка релейной защиты и автоматики</a>
									<ul class="sub-menu clearfix">
										<li class="menu-item first"><a
												href="https://dynamics.com.ru/production/retom-51"
												class="first">РЕТОМ-51</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-61">РЕТОМ-61</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-71">РЕТОМ-71</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/ret-10">РЕТ-10</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/ret-tn">РЕТ-ТН</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/ret-64-32">РЕТ-64/32</a></li>
										<li class="menu-item last"><a href="https://dynamics.com.ru/production/ret-gps"
												class="last">РЕТ-GPS</a></li>
									</ul>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/production/61850">Проверка
										оборудования для цифровой подстанции</a>
									<ul class="sub-menu clearfix">
										<li class="menu-item first"><a
												href="https://dynamics.com.ru/production/retom-61850"
												class="first">РЕТОМ-61850</a></li>
										<li class="menu-item last"><a
												href="https://dynamics.com.ru/production/61850/networkanalyzer"
												class="last">ПО «Сетевой анализатор»</a></li>
									</ul>
								</li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/production/retom-21-complex">Проверка первичного и
										вторичного электрооборудования</a>
									<ul class="sub-menu clearfix">
										<li class="menu-item first"><a
												href="https://dynamics.com.ru/production/retom-21"
												class="first">РЕТОМ-21</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-25">РЕТОМ-25</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-6000">РЕТОМ-6000</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-21-complex/retometrm2">РЕТОМЕТР-М2</a>
										</li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-21-complex/retometr-m3">РЕТОМЕТР-М3</a>
										</li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/ret-3000">РЕТ-3000</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/ret-vah-2000">РЕТ-ВАХ-2000</a>
										</li>
										<li class="menu-item last"><a
												href="https://dynamics.com.ru/production/ret-mikro"
												class="last">РЕТ-МИКРО</a></li>
									</ul>
								</li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/production/complex-equipment">Проверка
										высокочастотной аппаратуры</a>
									<ul class="sub-menu clearfix">
										<li class="menu-item first"><a
												href="https://dynamics.com.ru/production/retom-vch64"
												class="first">РЕТОМ-ВЧ/64</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/vcha-75m">ВЧА-75М</a></li>
										<li class="menu-item last"><a href="https://dynamics.com.ru/production/vcht-25m"
												class="last">ВЧТ-25М</a></li>
									</ul>
								</li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/production/progruzka-pervichnyim-tokom">Прогрузка
										первичным током</a>
									<ul class="sub-menu clearfix">
										<li class="menu-item first"><a
												href="https://dynamics.com.ru/production/retom-30ka"
												class="first">РЕТОМ-30кА</a></li>
									</ul>
								</li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/production/mikrometryi">Микроомметры</a>
									<ul class="sub-menu clearfix">
										<li class="menu-item first"><a href="https://dynamics.com.ru/production/ret-mom"
												class="first">РЕТ-МОМ</a></li>
										<li class="menu-item last"><a
												href="https://dynamics.com.ru/production/ret-mom.2"
												class="last">РЕТ-МОМ.2</a></li>
									</ul>
								</li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/production/accessories">Аксессуары</a>
									<ul class="sub-menu clearfix">
										<li class="menu-item first"><a
												href="https://dynamics.com.ru/production/accessories/ret-pt"
												class="first">РЕТ-ПТ</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/accessories/ret-dt">РЕТ-ДТ</a>
										</li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/spu-51">Стойка СПУ</a></li>
										<li class="menu-item last"><a
												href="https://dynamics.com.ru/production/suitcase51"
												class="last">Чемодан</a></li>
									</ul>
								</li>
								<li class="menu-item last"><a href="https://dynamics.com.ru/production/archive"
										class="last">Архив устройств</a>
									<ul class="sub-menu clearfix">
										<li class="menu-item first"><a
												href="https://dynamics.com.ru/production/archive/retom-11"
												class="first">РЕТОМ-11</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-11m">РЕТОМ-11М</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-41m">РЕТОМ-41М</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/ret-vah">РЕТ-ВАХ</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retom-2500">РЕТОМ-2500</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/retometr">РЕТОМЕТР</a></li>
										<li class="menu-item "><a
												href="https://dynamics.com.ru/production/ret-61850">РЕТ-61850</a></li>
										<li class="menu-item last"><a
												href="https://dynamics.com.ru/production/retom-vch"
												class="last">РЕТОМ-ВЧ/25</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="menu-item"><a href="https://dynamics.com.ru/training">Обучение</a>
							<ul class="sub-menu clearfix">
								<li class="menu-item first"><a href="https://dynamics.com.ru/training/online-seminar"
										class="first">Онлайн-курсы</a></li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/training/kvalifikaciya">Повышение квалификации</a>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/training/seminar">Бесплатные
										практические семинары</a></li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/training/vyiezdnoe-obuchenie">Выездное
										обучение</a></li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/training/literatura">Литература</a></li>
								<li class="menu-item last"><a href="https://dynamics.com.ru/training/otzivyobuch"
										class="last">Отзывы</a></li>
							</ul>
						</li>
						<li class="menu-item"><a href="https://dynamics.com.ru/support">Поддержка</a>
							<ul class="sub-menu clearfix">
								<li class="menu-item first"><a href="https://dynamics.com.ru/support/retom-11"
										class="first">РЕТОМ-11</a></li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-11m">РЕТОМ-11М</a>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-41">РЕТОМ-41</a>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-51">РЕТОМ-51</a>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-51m">РЕТОМ-51 (36
										А)</a></li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-61">РЕТОМ-61</a>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-71">РЕТОМ-71</a>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-vch">РЕТОМ-ВЧм</a>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-21">РЕТОМ-21</a>
								</li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retom-25">РЕТОМ-25</a>
								</li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/support/retom-6000">РЕТОМ-6000</a></li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/support/retom-2500">РЕТОМ-2500</a></li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/support/retom-30ka">РЕТОМ-30кА</a></li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/support/retom-61850">РЕТОМ-61850</a></li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/support/retom-vch64">РЕТОМ-ВЧ</a></li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/retometr">РЕТОМЕТР</a>
								</li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/support/retometr-m2">РЕТОМЕТР-М2</a></li>
								<li class="menu-item "><a
										href="https://dynamics.com.ru/support/retometr-m3">РЕТОМЕТР-М3</a></li>
								<li class="menu-item "><a href="https://dynamics.com.ru/support/ret-mom">РЕТ-МОМ</a>
								</li>
								<li class="menu-item last"><a href="https://dynamics.com.ru/support/ret-mom.2"
										class="last">РЕТ-МОМ.2</a></li>
							</ul>
						</li>
						<li class="menu-item"><a href="https://dynamics.com.ru/forum">Форум</a></li>
						<li class="menu-item last"><a href="https://dynamics.com.ru/contacts" class="last">Контакты</a>
						</li>
					</ul>
				</div>

				<a href="https://dynamics.com.ru/" id="ctabutton" class="ctabutton" title="НПП «Динамика»">

					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logow2.png">
				</a>

			</div>
		</header>