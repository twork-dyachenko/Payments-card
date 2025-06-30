<?php 
	$currentLang = $_GET['lang'] ?? 'ru';

	$langFile = "lang/{$currentLang}.php";
	if (!file_exists($langFile)) {
		$langFile = "lang/ru.php";
	}
	$lang = include $langFile;

	include("header.php");
?>
<title>Exchange ENG</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
</head>

<body>
    <main>

        <section class="services">
            <div class="container">
                <div class="services__header">
                    <div class="services__tab">
                        <span><a href="services.php"><?= htmlspecialchars($lang['services_tab']['main']) ?></a></span>
                        <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4 4L1 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span><span><a href="services-fin.php">Фин. организации</a></span></span>
						<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4 4L1 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
						<span><span><a href="services-fin--mfo.php"><b>МФО/МКО</b></a></span></span>

                    </div>
                    <div class="services__select">
						<div class="services-search__wrapper">
							<input
							type="text"
							class="services-search__input"
							placeholder="<?= $lang['search_placeholder'] ?>"
							autocomplete="off"
							/>
							<div class="services-search__list" id="services-search__list"></div>
						</div>						 
					</div>
                </div>
                <div class="services__list">
                    <div class="services__item">
                        <a href="services-steam.php">
                            <img src="assets/img/icon-zaimer.png" alt="Icon Займер">
                            <span>Займер</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-steam.php">
                            <img src="assets/img/icon-koke.png" alt="Icon Koke">
                            <span>Koke</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-steam.php">
                            <img src="assets/img/icon-altyn.png" alt="Icon AltynCoin">
                            <span>AltynCoin</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="services__text">
            <div class="container">
                <div class="services__text-item">
                    <h1>Финансовые организации – Погашение кредитов и займов.</h1>
                    <p>На Pay+ вы можете легко <b>внести платеж по кредиту</b> или <b>оплатить микрозайм</b> – быстро, удобно и без лишних переплат. Поддерживаются <b>платежи в МФО Казахстан</b> и перевод денег в любой банк страны. Онлайн-сервис позволяет выполнить <b>погашение займа через интернет</b> в считанные минуты. Просто выберите нужную финансовую организацию, укажите сумму и подтвердите операцию. В нашем сервисе мы приложили много усилий для того, чтобы оплата кредитов онлайн  проходили безопасно, быстро и доступно с любого устройства. Мы предлагаем широкий спектр финансовых услуг онлайн, чтобы вы могли управлять своими финансами, где бы вы ни находились.</p>
                </div>
            </div>
        </div>

		<?php include("component/faq-services.php"); ?>
		
    </main>

<?php include("footer.php"); ?>