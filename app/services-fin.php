<?php 
  $currentLang = $_GET['lang'] ?? 'ru';

  $langFile = "lang/{$currentLang}/services-fin.php";
  if (!file_exists($langFile)) {
      $langFile = "lang/ru/services-fin.php";
  }
  $lang = include $langFile;

  include("header.php");
?>
<title><?= htmlspecialchars($lang['page_title']) ?></title>
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
            <span><a href="services-fin.php"><b><?= htmlspecialchars($lang['services_tab']['finance']) ?></b></a></span>
          </div>
          <div class="services__select">
            <div class="services-search__wrapper">
              <input
                type="text"
                class="services-search__input"
                placeholder="<?= htmlspecialchars($lang['search_placeholder']) ?>"
                autocomplete="off"
              />
              <div class="services-search__list" id="services-search__list"></div>
            </div>                         
          </div>
        </div>

        <div class="services__list">
          <?php foreach ($lang['services_list'] as $item): ?>
            <div class="services__item">
              <a href="<?= htmlspecialchars($item['url']) ?>">
                <div class="services__icon">
                  <?= $item['icon_svg'] ?>
                </div>
                <span><?= htmlspecialchars($item['title']) ?></span>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="services__text">
      <div class="container">
        <div class="services__text-item">
          <h1><?= $lang['finance_text__category']['title'] ?></h1>
          <p><?= $lang['finance_text__category']['text'] ?></p>
        </div>
      </div>
    </section>

    <?php include("component/faq-services.php"); ?>
	
  </main>

<?php include("footer.php"); ?>
