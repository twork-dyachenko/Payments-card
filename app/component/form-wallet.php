<?php
$currentLang = $_GET['lang'] ?? 'ru';

$formSteamFile = "lang/{$currentLang}/form-wallet.php";
if (!file_exists($formSteamFile)) {
    $formSteamFile = "lang/ru/form-wallet.php";
}
$formLang = include $formSteamFile;
?>

<form class="payment-form services-steam--form" onsubmit="return validateForm(event)" novalidate>
    <div class="payment-form__container">
        <div class="payment-form__block">
            <h2 class="payment-form__subtitle"><?= htmlspecialchars($formLang['form_title']) ?></h2>
            <div class="payment-form__row">
                <div class="payment-form__wrapper half-width">
                    <input type="text" class="payment-form__input" name="walletNumber" placeholder="<?= htmlspecialchars($formLang['wallet_placeholder']) ?>" required />
                    <!-- Wallet SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#999" fill-rule="evenodd" d="M5 6.25A2.75 2.75 0 0 0 2.25 9v9A2.75 2.75 0 0 0 5 20.75h14A2.75 2.75 0 0 0 21.75 18V9A2.75 2.75 0 0 0 19 6.25H5Zm11.5 6a1.25 1.25 0 1 0 0 2.5 1.25 1.25 0 0 0 0-2.5Z" clip-rule="evenodd"/><path fill="#999" d="M16.485 3.07A2 2 0 0 1 19 5H9l7.485-1.93Z"/></svg>
                </div>
                <div class="payment-form__wrapper half-width">
                    <input 
                        type="number" 
                        class="payment-form__input" 
                        id="amountInput" 
                        name="amount" 
                        placeholder="<?= htmlspecialchars($formLang['amount_placeholder']) ?>" 
                        min="10" 
                        max="500000" 
                        required 
                    />
                    <span id="amount-error" class="payment-form__msg payment-form__hidden">
                        <?= htmlspecialchars($formLang['amount_error']) ?>
                    </span>
                    <!-- Amount SVG -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" fill="none"><g clip-path="url(#a)"><path fill="#fff" d="M0 1.406C0 .706.559.141 1.25.141h12.5c.691 0 1.25.565 1.25 1.265s-.559 1.266-1.25 1.266H1.25C.559 2.672 0 2.106 0 1.406ZM0 6.47c0-.7.559-1.266 1.25-1.266h12.5c.691 0 1.25.566 1.25 1.266 0 .7-.559 1.265-1.25 1.265h-5v8.86c0 .7-.559 1.265-1.25 1.265s-1.25-.565-1.25-1.265v-8.86h-5C.559 7.734 0 7.17 0 6.47Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h15v18H0z"/></clipPath></defs></svg>
                </div>
            </div>

            <button type="submit" class="payment-form__pay-btn" disabled>
                <!-- Button icon left -->
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 11v4.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h11.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V11M3 11V9m0 2h18M3 9v-.8c0-1.12 0-1.68.218-2.108.192-.377.497-.682.874-.874C4.52 5 5.08 5 6.2 5h11.6c1.12 0 1.68 0 2.107.218.377.192.683.497.875.874.218.427.218.987.218 2.105V9M3 9h18M7 15h4m10-4V9"/></svg>
                <?= htmlspecialchars($formLang['pay_button']) ?>
                <!-- Button loader icon -->
                <svg class="payment-form__submit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#fff" stroke="#fff" d="M12 22c5.421 0 10-4.579 10-10h-2c0 4.337-3.663 8-8 8s-8-3.663-8-8 3.663-8 8-8V2C6.579 2 2 6.58 2 12c0 5.421 4.579 10 10 10Z"/></svg>
            </button>

            <div class="payment-form__note">
                <?= $formLang['note_text'] ?>
            </div>
        </div>

        <div class="payment-form__block">
            <h3 class="payment-form__subtitle"><?= htmlspecialchars($formLang['block_title']) ?></h3>
            <div class="payment-form__summary">
                <div class="payment-form__summary-item">
                    <p><?= $formLang['commission'] ?>: <span id="commission">0,00</span><span>KZT</span></p>
                    <p><?= $formLang['debited'] ?>: <span id="totalDebited">0,00</span><span>KZT</span></p>
                    <p><?= $formLang['charged'] ?>: <span id="totalCharged">0,00</span><span>KZT</span></p>
                </div>
            </div>
        </div>
    </div>
</form>
