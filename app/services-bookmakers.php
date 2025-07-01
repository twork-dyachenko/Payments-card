<?php 
	$currentLang = $_GET['lang'] ?? 'ru';

	$langFile = "lang/{$currentLang}/services-games.php";
	if (!file_exists($langFile)) {
		$langFile = "lang/ru/services-games.php";
	}
	$lang = include $langFile;

	include("header.php");
?>
<title>Services bookmakers</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<head>
</head>

<body style="background: #F3F3F3;">
    <main>
        <section class="payment-section services__tell">
			<div class="services__header">
				<div class="services__tab">
					<span><a href="services.php"><?= htmlspecialchars($lang['services_tab']['main']) ?></a></span>
					<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L4 4L1 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<span><span><a href="services-bookmakers.php"><b>Olimpbet & Winline</b></a></span></span>

				</div>
			</div>
			<?php include("component/form-wallet.php"); ?>
        </section>

    </main>

<?php include("footer.php"); ?>