<?php 
	$currentLang = $_GET['lang'] ?? 'ru';

	$langFile = "lang/{$currentLang}.php";
	if (!file_exists($langFile)) {
		$langFile = "lang/ru.php";
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
					<span><span><a href="services-steam.php"><b>Steam</b></a></span></span>

				</div>
			</div>
			<?php include("component/form-wallet.php"); ?>
        </section>

        <section class="services__text">
            <div class="container">
                <div class="services__text-item">
                    <h1>Steam</h1>
                    <p>Пополняйте <b>баланс Steam</b> через Pay+ быстро и без лишних шагов. Никаких <b>пополнения Steam по ваучерам</b> на фиксированную cумму: просто выберите введите желаемую сумму, e-mail, подтвердите платёж — и получите деньги на баланс практически моментально. Steam Wallet – удобная альтернатива привязыванию банковской карты к своему аккаунту, позволяющая покупать игры в Steam – как и внутриигровые скины – с моментальным списанием. Сервис работает круглосуточно, а оплата занимает меньше минуты – для тех, кто ценит комфорт, скорость и конфиденциальность.</p>
                </div>
            </div>
        </section>

		<?php include("component/faq-services.php"); ?>
		
    </main>

<?php include("footer.php"); ?>