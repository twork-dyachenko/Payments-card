<!DOCTYPE html>
<html lang="en">
<head>
   <meta name="robots" content="noindex, nofollow">
	<meta charset="UTF-8">
	<meta name="theme-color" content="#fff">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg"> -->
	<link rel="stylesheet" href="assets/css/assistant.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8/inputmask.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.8/bindings/inputmask.binding.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


	<div class="menu">
		<a href="index-ru.php">RU</a>
		<a href="index-kz.php">KZ</a>
		<a href="index.php">ENG</a>
		<a href="payment-status-ru.php">Status RU</a>
		<a href="payment-status-kz.php">Status KZ</a>
		<a href="payment-status.php">Status ENG</a>
		<a href="payment-card.php">Payment Card ENG</a>
		<a href="services.php">Services</a>
<?php
$currentLang = $_GET['lang'] ?? 'ru';
?>

<form method="get" onchange="this.submit()" style="margin-left: auto;">
    <select name="lang">
        <option value="kz" <?= $currentLang === 'kz' ? 'selected' : '' ?>>KZ</option>
        <option value="ru" <?= $currentLang === 'ru' ? 'selected' : '' ?>>RU</option>
        <option value="eng" <?= $currentLang === 'eng' ? 'selected' : '' ?>>EN</option>
    </select>
    <?php
    // Зберігаємо інші параметри запиту, окрім lang
    foreach ($_GET as $key => $value) {
        if ($key !== 'lang') {
            echo "<input type='hidden' name='" . htmlspecialchars($key) . "' value='" . htmlspecialchars($value) . "' />";
        }
    }
    ?>
</form>

	</div>