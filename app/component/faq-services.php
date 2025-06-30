<?php 
$currentLang = $_GET['lang'] ?? 'ru';

$faqFile = "lang/{$currentLang}/faq-services.php";
if (!file_exists($faqFile)) {
    $faqFile = "lang/ru/faq-services.php";
}
$lang = include $faqFile;
?>

<section class="faq faq-payment">
    <div class="container">
        <p class="title-section"><?= htmlspecialchars($lang['faq_title']) ?></p>
        <div class="accordion">

        <?php
        $items = $lang['faq_items'];
        $half = ceil(count($items) / 2);
        $columns = array_chunk($items, $half);
        ?>

        <?php foreach ($columns as $colIndex => $colItems): ?>
            <div class="col">
            <?php foreach ($colItems as $index => $item): ?>
                <?php
                $buttonId = 'accordion-button-' . ($colIndex * $half + $index + 1);
                ?>
                <div class="accordion-item">
                <button id="<?= $buttonId ?>" aria-expanded="false">
                    <span class="accordion-title"><?= htmlspecialchars($item['question']) ?></span>
                    <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                </button>
                <div class="accordion-content">
                    <p><?= htmlspecialchars($item['answer']) ?></p>
                </div>
                </div>
            <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

        </div>
    </div>
</section>