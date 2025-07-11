<?php 
	$currentLang = $_GET['lang'] ?? 'ru';

	$langFile = "lang/{$currentLang}/services-games.php";
	if (!file_exists($langFile)) {
		$langFile = "lang/ru/services-games.php";
	}
	$lang = include $langFile;

	include("header.php");
?>
<title>Services Steam</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<head>
</head>

<body>
    <main>
        <section class="payment-section services__tell">
			<div class="services__header">
				<div class="services__tab">
					<span><a href="services.php"><?= htmlspecialchars($lang['services_tab']['main']) ?></a></span>
					<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L4 4L1 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<span><span><a href="services-steam.php"><b><?= htmlspecialchars($lang['services_text__steam']['title']) ?></b></a></span></span>

				</div>
			</div>
			<?php include("component/form-wallet.php"); ?>
        </section>

        <section class="services__text">
            <div class="container">
                <div class="services__text-item">
                    <h1><?= $lang['services_text__steam']['title'] ?></h1>
                    <p><?= $lang['services_text__steam']['text'] ?></p>
                </div>
            </div>
        </section>

		<?php include("component/faq-services.php"); ?>
    </main>

<?php include("footer.php"); ?>