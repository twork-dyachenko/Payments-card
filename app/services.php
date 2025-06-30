<?php 
	$currentLang = $_GET['lang'] ?? 'ru';

	$langFile = "lang/{$currentLang}/services.php";
	if (!file_exists($langFile)) {
		$langFile = "lang/ru.php";
	}
	$lang = include $langFile;

	include("header.php");
?>


<title><?= $lang['page_title'] ?></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
</head>

<body>
    <main>
        <section class="services">
            <div class="container">
                <div class="services__header">
                    <div class="services__tab">
                        <span><a href="services.php"><?= $lang['breadcrumb_services']?></a></span>
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
                        <a href="services-mobile.php">
                            <div class="services__icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 6.2002V17.8002C7 18.9203 7 19.4801 7.21799 19.9079C7.40973 20.2842 7.71547 20.5905 8.0918 20.7822C8.5192 21 9.07899 21 10.1969 21H13.8031C14.921 21 15.48 21 15.9074 20.7822C16.2837 20.5905 16.5905 20.2842 16.7822 19.9079C17 19.4805 17 18.9215 17 17.8036V6.19691C17 5.07899 17 4.5192 16.7822 4.0918C16.5905 3.71547 16.2837 3.40973 15.9074 3.21799C15.4796 3 14.9203 3 13.8002 3H10.2002C9.08009 3 8.51962 3 8.0918 3.21799C7.71547 3.40973 7.40973 3.71547 7.21799 4.0918C7 4.51962 7 5.08009 7 6.2002Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <span><span><?= $lang['services_menu']['telephony'] ?></span></span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-fin.php">
                            <div class="services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none"><path fill="#fff" fill-rule="evenodd" d="M8.397 5.7c-.55.413-.8.908-.8 1.37 0 .462.25.958.8 1.372.552.414 1.36.7 2.295.7a1 1 0 0 1 0 2c-1.326 0-2.565-.402-3.495-1.1-.93-.698-1.6-1.738-1.6-2.971s.67-2.274 1.6-2.972C8.127 3.402 9.367 3 10.692 3c2.053 0 3.994.983 4.766 2.62a1.001 1.001 0 0 1-1.81.853C13.298 5.726 12.206 5 10.693 5c-.935 0-1.744.286-2.296.7Z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="M12.657 14.583c.551-.413.799-.908.799-1.37 0-.462-.248-.959-.8-1.372-.551-.414-1.36-.7-2.294-.7a1 1 0 0 1 0-2c1.326 0 2.565.402 3.495 1.1.93.698 1.599 1.738 1.599 2.971s-.669 2.274-1.6 2.971c-.93.698-2.168 1.1-3.494 1.1-2.053 0-3.995-.983-4.766-2.621a1 1 0 0 1 1.809-.853c.352.748 1.444 1.474 2.957 1.474.935 0 1.743-.286 2.295-.7ZM10.5 1a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0V2a1 1 0 0 1 1-1Z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="M10.5 16a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0v-1a1 1 0 0 1 1-1Z" clip-rule="evenodd"/></svg>
                            </div>
                            <span><span><?= $lang['services_menu']['finance'] ?></span></span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="index.php">
                            <div class="services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 13 3 3m0 0-3 3m3-3H5m3-5L5 8m0 0 3-3M5 8h14"/></svg>
                            </div>
                            <span><span><?= $lang['services_menu']['p2p'] ?></span></span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-games.php">
                            <div class="services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 13 3 3m0 0-3 3m3-3H5m3-5L5 8m0 0 3-3M5 8h14"/></svg>
                            </div>
                            <span><span><?= $lang['services_menu']['games'] ?></span></span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-list.php">
                            <div class="services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21.5 12-9 6-9-6m18 4-9 6-9-6m18-8-9 6-9-6 9-6 9 6Z"/></svg>
                            </div>
                            <span><span><?= $lang['services_menu']['other'] ?></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="services__text">
            <div class="container">
                <div class="services__text-item">
					 <h1><?= $lang['services_text']['title'] ?></h1>
					 <p><?= $lang['services_text']['text'] ?></p>
                </div>
            </div>
        </div>
		
		<?php include("component/faq-services.php"); ?>
		
    </main>

<?php include("footer.php"); ?>