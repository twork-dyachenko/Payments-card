<!DOCTYPE html>
<html lang="kk">
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


<title>Exchange KZ</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
</head>

<body>
    <div class="menu">
		<a href="index-ru.php">RU</a>
		<a href="index-kz.php">KZ</a>
		<a href="index.php">ENG</a>
		<a href="payment-status-ru.php">Status RU</a>
		<a href="payment-status-kz.php">Status KZ</a>
		<a href="payment-status.php">Status ENG</a>
	</div>
    <main>
        <section class="payment-section">
            <form class="payment-form" onsubmit="return validateForm(event)" novalidate>
                <h1 class="payment-form__title">Қазақстанда картадан картаға ақша аударымдары</h1>
                <div class="payment-form__container">
                    <div class="payment-form__block payment-form__block--sender">
                        <h2 class="payment-form__subtitle">Жіберуші</h2>
						<div class="payment-form__row">
                        	<div class="payment-form__wrapper full-width">
								
								<input type="text" data-type="card-number" class=" payment-form__input" name="senderCard" placeholder="0000 0000 0000 0000" maxlength="19" required pattern="\d{19}" />
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 11v4.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h11.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V11M3 11V9m0 2h18M3 9v-.8c0-1.12 0-1.68.218-2.108.192-.377.497-.682.874-.874C4.52 5 5.08 5 6.2 5h11.6c1.12 0 1.68 0 2.107.218.377.192.683.497.875.874.218.427.218.987.218 2.105V9M3 9h18M7 15h4m10-4V9"/></svg>
							</div>
                            <div class="payment-form__wrapper half-width">
								<input type="text" class="payment-form__input" name="cvv" placeholder="CVV" required pattern="\d{3}" maxlength="3" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 3)" />
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.692 8H6c-.933 0-1.4 0-1.757.182-.313.16-.568.414-.728.728-.182.356-.182.823-.182 1.757v4.667c0 .933 0 1.4.182 1.756.16.314.415.569.728.729C4.6 18 5.066 18 5.998 18h8.005c.931 0 1.397 0 1.753-.181.314-.16.57-.415.73-.73.18-.355.18-.821.18-1.753v-4.672c0-.932 0-1.398-.18-1.754a1.668 1.668 0 0 0-.73-.728C15.4 8 14.934 8 14 8h-1.692M7.692 8h4.616M7.692 8a.192.192 0 0 1-.192-.192V5.5a2.5 2.5 0 0 1 5 0v2.308a.193.193 0 0 1-.192.192"/></svg>
							</div>
                            <div class="payment-form__wrapper half-width">
								<input 
									type="text" 
									class="payment-form__input" 
									name="expiry" 
									id="expiry" 
									placeholder="MM / YY" 
									required 
									pattern="\d{2}\/\d{2}" 
									oninput="formatExpiry(this)" 
								/>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.667 3.333H6c-.933 0-1.4 0-1.757.182-.313.16-.568.415-.728.728-.182.357-.182.824-.182 1.757v.667m3.334-3.334h6.667m-6.667 0V1.667m6.667 1.666H14c.934 0 1.4 0 1.756.182.314.16.57.415.73.728.18.356.18.823.18 1.754v.67m-3.332-3.334V1.667m-10 5V14c0 .934 0 1.4.181 1.757.16.313.415.568.728.728.356.182.823.182 1.755.182h8.005c.931 0 1.397 0 1.753-.182.314-.16.57-.415.73-.728.18-.357.18-.822.18-1.754V6.667m-13.332 0h13.333m-3.334 6.666h.002v.002h-.002v-.002Zm-3.333 0h.002v.002H10v-.002Zm-3.333 0h.002v.002h-.002v-.002ZM13.335 10v.002h-.002V10h.002ZM10 10h.002v.002H10V10Zm-3.333 0h.002v.002h-.002V10Z"/></svg>
							</div>
                        </div>
						<div class="payment-form__row">
							<div class="payment-form__wrapper full-width">
								<input 
									type="text" 
									class="payment-form__input" 
									id="senderFullName" 
									name="senderFullName" 
									placeholder="Аты Тегі" 
									required 
								/>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.667 17.5c0-2.301-2.985-4.167-6.667-4.167S3.333 15.2 3.333 17.5M10 10.833A4.167 4.167 0 1 1 10 2.5a4.167 4.167 0 0 1 0 8.333Z"/></svg>
							</div>
							<div class="payment-form__wrapper full-width">
								<input type="tel" class="payment-form__input" name="senderPhone" placeholder="+7(000) 000 00 00" required pattern="^\+?\d{9,15}$" />
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 6.2v11.6c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h3.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V6.197c0-1.118 0-1.678-.218-2.105a2.001 2.001 0 0 0-.875-.874C15.48 3 14.92 3 13.8 3h-3.6c-1.12 0-1.68 0-2.108.218a1.999 1.999 0 0 0-.874.874C7 4.52 7 5.08 7 6.2Z"/></svg>
							</div>
						</div>
                    </div>

                    <div class="payment-form__arrow">
						<div class="payment-form__arrow--icon">
							<svg id="payment-arrow--desk" xmlns="http://www.w3.org/2000/svg" width="25" height="33" fill="none"><path fill="#000" fill-rule="evenodd" d="m13.966 17.478-7.779 7.778-1.944-1.944 6.806-6.806-6.806-6.807 1.944-1.944 7.779 7.778a1.375 1.375 0 0 1 0 1.945Z" clip-rule="evenodd"/><path fill="#000" fill-rule="evenodd" d="m21.966 17.478-7.779 7.778-1.944-1.944 6.806-6.806-6.806-6.807 1.944-1.944 7.779 7.778a1.375 1.375 0 0 1 0 1.945Z" clip-rule="evenodd"/></svg>
							<svg id="payment-arrow--mob" xmlns="http://www.w3.org/2000/svg" width="28" height="14" fill="none"><g clip-path="url(#a)"><path fill="#fff" fill-rule="evenodd" d="m13.17 11.85-6.6-6.6L8.22 3.6l5.775 5.775L19.77 3.6l1.65 1.65-6.6 6.6a1.166 1.166 0 0 1-1.65 0Z" clip-rule="evenodd"/></g><defs><clipPath id="a"><path fill="#fff" d="M28 0v14H0V0z"/></clipPath></defs></svg>
						</div>
                    </div>

                    <div class="payment-form__block payment-form__block--recipient">
                        <h3 class="payment-form__subtitle">Получатель</h3>
                        <div class="payment-form__row">
							<div class="payment-form__wrapper full-width">
								<input type="text" data-type="card-number" class="payment-form__input" name="recipientCard" placeholder="0000 0000 0000 0000" maxlength="19" required pattern="\d{19}" />
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 11v4.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h11.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V11M3 11V9m0 2h18M3 9v-.8c0-1.12 0-1.68.218-2.108.192-.377.497-.682.874-.874C4.52 5 5.08 5 6.2 5h11.6c1.12 0 1.68 0 2.107.218.377.192.683.497.875.874.218.427.218.987.218 2.105V9M3 9h18M7 15h4m10-4V9"/></svg>
							</div>
							<div class="payment-form__wrapper full-width">
								<input 
									type="text" 
									class="payment-form__input" 
									id="recipientFullName" 
									name="recipientFullName" 
									placeholder="Аты Тегі" 
									required 
								/>
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.667 17.5c0-2.301-2.985-4.167-6.667-4.167S3.333 15.2 3.333 17.5M10 10.833A4.167 4.167 0 1 1 10 2.5a4.167 4.167 0 0 1 0 8.333Z"/></svg>
							</div>
						</div>
						<div class="payment-form__row">
							<div class="payment-form__wrapper full-width">
								<input 
									type="number" 
									class="payment-form__input payment-form__input--amount" 
									id="amountInput" 
									name="amount" 
									placeholder="Cомасы" 
									min="150" 
									max="500000" 
									required 
								/>
								<span id="amount-error" class="payment-form__msg payment-form__hidden">Транзакция үшін 500-ден <br> 500 000 KZT дейін</span>
							</div>
							<div class="payment-form__wrapper full-width">
								<span class="payment-form__limit">Бір транзакция үшін 500-ден <br> 500 000 KZT дейін</span>
							</div>
						</div>
						
                    </div>
                </div>
				<div class="payment-form__container">
					<div class="payment-form__summary">
						<div class="payment-form__summary-item">
							<p>Комиссия: <span id="commission">0,00</span><span>KZT</span></p>
							<p>Есептен шығару: <span id="totalDebited">0,00</span><span>KZT</span></p>
						</div>
						<div class="payment-form__total">
							<p>Төлеу үшін</p> <strong id="totalToPay">0,00 </strong><span>KZT</span></p>
						</div>
						<button type="submit" class="payment-form__pay-btn">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 11v4.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h11.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V11M3 11V9m0 2h18M3 9v-.8c0-1.12 0-1.68.218-2.108.192-.377.497-.682.874-.874C4.52 5 5.08 5 6.2 5h11.6c1.12 0 1.68 0 2.107.218.377.192.683.497.875.874.218.427.218.987.218 2.105V9M3 9h18M7 15h4m10-4V9"/></svg>
							Төлеу
							<svg class="payment-form__submit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#fff" stroke="#fff" d="M12 22c5.421 0 10-4.579 10-10h-2c0 4.337-3.663 8-8 8s-8-3.663-8-8 3.663-8 8-8V2C6.579 2 2 6.58 2 12c0 5.421 4.579 10 10 10Z"/></svg>
						</button>
						<div class="payment-form__note">
                            Басу арқылы сіз шарттармен келісесіз <br>
                            Төлем қызметтерін көрсетуге арналған қоғамдық келісім.
						</div>
					</div>
				</div>
            </form>
        </section>
                
        <section class="faq faq-payment">
            <div class="container">
                <p class="title-section">FAQ</p>
                <div class="accordion">
                    <div class="col">
                        <div class="accordion-item">
                            <button id="accordion-button-1" aria-expanded="false">
                                <span class="accordion-title">Ақша аудару процесі қанша уақытқа созылады?</span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p>Қазіргі заманғы ақша аудару процесі дерлік лезде. Интернет байланысы тұрақсыз болса, төлем процесі ұзағырақ уақыт алуы мүмкін. Өңдеудің өзі 5 секундтан 24 сағатқа дейін созылады.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-2" aria-expanded="false">
                                <span class="accordion-title">Қандай карталар аударымға қолжетімді?</span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p>Ақша аударымдары үшін Visa және Mastercard халықаралық төлем жүйелерінің карталары қол жетімді.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="accordion-item">
                            <button id="accordion-button-3" aria-expanded="false">
                                <span class="accordion-title">Егер ақша алушыға келмесе не істеу керек?</span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p>Ерекше жағдайларда ақша аударымын өңдеуге 24 сағатқа дейін кетуі мүмкін. Егер осы кезеңнен кейін ақша алушының картасына түспесе, +7 707 342 44 83 телефоны арқылы қолдау көрсету орталығына хабарласыңыз.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-4" aria-expanded="false">
                                <span class="accordion-title">Төлем кезінде қате орын алды. Не істеу керек?</span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p>Егер қаражат есептен шығарылмаса, әрекетті қайталаңыз; төлем бірнеше себептерге байланысты өңделмеген болуы мүмкін (мысалы, тұрақсыз Интернет байланысы). Егер қаражат есептен шығарылған болса, +7 707 342 44 83 телефоны бойынша қолдау көрсетуге хабарласыңыз.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="accordion-item">
                            <button id="accordion-button-5" aria-expanded="false">
                                <span class="accordion-title">Қолдау қызметіне қалай хабарласуға болады?</span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p>+7 707 342 44 83 телефоны арқылы қолдау қызметіне хабарласуға болады.</p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-6" aria-expanded="false">
                                <span class="accordion-title">Ақша аударымдарына қандай шектеулер қойылады?</span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p>Негізгі транзакция шегі бір транзакция үшін 500-ден 500 000 теңгеге дейін. Маңызды: әрбір банк өз карталарын пайдаланып ақша аударымдарына қосымша шектеулер қоюы мүмкін. Бұл ақпарат әдетте сіздің банкіңізде болады.</p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="accordion-item">
                            <button id="accordion-button-7" aria-expanded="false">
                                <span class="accordion-title"> </span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p></p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-8" aria-expanded="false">
                                <span class="accordion-title"> </span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="accordion-item">
                            <button id="accordion-button-9" aria-expanded="false">
                                <span class="accordion-title"> </span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p></p>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <button id="accordion-button-10" aria-expanded="false">
                                <span class="accordion-title"> </span>
                                <span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
                            </button>
                            <div class="accordion-content">
                                <p></p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
    </main>

<?php include("footer.php"); ?>
