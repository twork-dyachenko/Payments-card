<?php 
	$currentLang = $_GET['lang'] ?? 'ru';

	$langFile = "lang/{$currentLang}/services-mobile.php";
	if (!file_exists($langFile)) {
		$langFile = "lang/ru/services-mobile.php";
	}
	$lang = include $langFile;

	include("header.php");
?>
<title>Services Beeline ENG</title>
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
					<span><a href="services-mobile.php"><?= htmlspecialchars($lang['services_tab']['telephony']) ?></a></span>
					<svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L4 4L1 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<span><span><a href="services-beeline.php"><b>Beeline</b></a></span></span>
				</div>
			</div>
            <?php include("component/form-mobile.php"); ?>
        </section>

        <section class="services__text">
			<div class="container">
				<div class="services__text-item">
				<h1><?= $lang['services_text__mobile-beeline']['title'] ?></h1>
				<p><?= $lang['services_text__mobile-beeline']['text'] ?></p>
				</div>
			</div>
		</section>

		<?php include("component/faq-services.php"); ?>

    </main>

<?php include("footer.php"); ?>