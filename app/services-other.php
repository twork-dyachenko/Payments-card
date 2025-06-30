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
                        <span><span><a href="services-other.php"><b>Прочее</b></a></span></span>

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
                            <img src="assets/img/icon-olimpbet.png" alt="Icon Olimpbet">
                            <span>Olimpbet</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-steam.php">
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
                    <h1>Pay+: единый сервис оплаты в Казахстане.</h1>
                    <p>Развивая свои финтех-инструменты для бизнеса, мы создали удобный сервис оплаты, чтобы вы могли забыть об очередях к платежному терминалу, бумажных чеках и неудобных приложениях. Онлайн платежи на Pay+ – это быстрый, безопасный і удобный способ оплатить услуги через интернет: от пополнения счета онлайн до коммуналки, связи или подписок.  Pay+  это платежный сервис для Казахстана, который мы делаем с вниманием к мелким деталям, из которых состоит качественный сервис. Оплата онлайн теперь такая, какой она и должна быть – простая и доступная для всех.</p>
                </div>
            </div>
        </section>

		<?php include("component/faq-services.php"); ?>
		
    </main>

<?php include("footer.php"); ?>