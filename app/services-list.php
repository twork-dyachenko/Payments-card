<?php 
	$currentLang = $_GET['lang'] ?? 'ru';

	$langFile = "lang/{$currentLang}/services.php";
	if (!file_exists($langFile)) {
		$langFile = "lang/ru/services.php";
	}
	$lang = include $langFile;

	include("header.php");
?>
<title>Services list</title>
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
                        <span><span><a href="services-list.php"><b><?= htmlspecialchars($lang['services_tab']['other']) ?></b></a></span></span>
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
                        <a href="services-beeline.php">
                            <img src="assets/img/icon-beeline.png" alt="Icon Beeline">
                            <span>Beeline</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-kcell.php">
                            <img src="assets/img/icon-kcell.png" alt="Icon K-cell">
                            <span>K-cell</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-activ.php">
                            <img src="assets/img/icon-activ.png" alt="Icon Activ">
                            <span>Activ</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-tele2.php">
                            <img src="assets/img/icon-tele2.png" alt="Icon TELE2">
                            <span>TELE2</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-zaimer.php">
                            <img src="assets/img/icon-zaimer.png" alt="Icon Zaimer">
                            <span>Zaimer</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-koke.php">
                            <img src="assets/img/icon-koke.png" alt="Icon Koke">
                            <span>Koke</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-altyn.php">
                            <img src="assets/img/icon-altyn.png" alt="Icon AltynCoin">
                            <span>AltynCoin</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-steam.php">
                            <img src="assets/img/icon-steam.png" alt="Icon Steam">
                            <span>Steam</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-bookmakers.php">
                            <img src="assets/img/icon-olimpbet.png" alt="Icon Olimpbet">
                            <span>Olimpbet</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-bookmakers.php">
                            <img src="assets/img/icon-winline.png" alt="Icon Winline">
                            <span>Winline</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="services__text">
            <div class="container">
                <div class="services__text-item">
                    <h1><?= $lang['services_text']['title'] ?></h1>
                    <p><?= $lang['services_text']['text'] ?></p>
                </div>
            </div>
        </section>

		<?php include("component/faq-services.php"); ?>
    </main>

<?php include("footer.php"); ?>