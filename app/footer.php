
<script src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/7.6.1/imask.min.js"></script>
<?php
// Получаем имя текущей страницы
$currentPage = basename($_SERVER['PHP_SELF']);

// Список страниц, на которых нужен скрипт
$pagesWithScript = ['index.php', 'index-kz.php', 'index-кг.php'];

if (in_array($currentPage, $pagesWithScript)) {
    echo '<script src="assets/js/main.js"></script>';
}
?>

<script src="assets/js/services.js"></script>

<!-- скрипт с готового проекта, его не нужно переносить еще раз -->
<script>
    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>

</body>
</html>