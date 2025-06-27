<?php include("header.php"); ?>
<title>Services Beeline ENG</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<head>
</head>

<body>
    <main>
        
        <section class="payment-section services__tell">
            <form class="payment-form" onsubmit="return validateForm(event)" novalidate>
            <div class="services__header">
                    <div class="services__tab">
                        <span><a href="services.php">Сервисы</a></span>
                        <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4 4L1 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span><span><a href="services-beeline.php"><b>Beeline</b></a></span></span>

                    </div>
                </div>
                <div class="payment-form__container">
                    <div class="payment-form__block">
                        <h2 class="payment-form__subtitle">Insert the date</h2>
						<div class="payment-form__row">
                            <div class="payment-form__wrapper half-width">
                                <input type="tel" class="payment-form__input" name="senderPhone" placeholder="+7 (000) 000-00-00" required pattern="^\+?\d{9,15}$" />
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 6.2v11.6c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h3.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V6.197c0-1.118 0-1.678-.218-2.105a2.001 2.001 0 0 0-.875-.874C15.48 3 14.92 3 13.8 3h-3.6c-1.12 0-1.68 0-2.108.218a1.999 1.999 0 0 0-.874.874C7 4.52 7 5.08 7 6.2Z"/></svg>
							</div>
							<div class="payment-form__wrapper half-width">
                                <input 
									type="number" 
									class="payment-form__input" 
									id="amountInput" 
									name="amount" 
									placeholder="Amount" 
									min="10" 
									max="500000" 
									required 
								/>
								<span id="amount-error" class="payment-form__msg payment-form__hidden">Amount must be between 150 and 500,000</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" fill="none"><g clip-path="url(#a)"><path fill="#fff" d="M0 1.406C0 .706.559.141 1.25.141h12.5c.691 0 1.25.565 1.25 1.265s-.559 1.266-1.25 1.266H1.25C.559 2.672 0 2.106 0 1.406ZM0 6.47c0-.7.559-1.266 1.25-1.266h12.5c.691 0 1.25.566 1.25 1.266 0 .7-.559 1.265-1.25 1.265h-5v8.86c0 .7-.559 1.265-1.25 1.265s-1.25-.565-1.25-1.265v-8.86h-5C.559 7.734 0 7.17 0 6.47Z"/></g><defs><clipPath id="a"><path fill="#fff" d="M0 0h15v18H0z"/></clipPath></defs></svg>
							</div>
                            
                        </div>
					
                        <button type="submit" class="payment-form__pay-btn" disabled>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 11v4.8c0 1.12 0 1.68.218 2.108a2 2 0 0 0 .874.874c.427.218.987.218 2.105.218h11.606c1.118 0 1.677 0 2.104-.218.377-.192.683-.498.875-.874.218-.428.218-.986.218-2.104V11M3 11V9m0 2h18M3 9v-.8c0-1.12 0-1.68.218-2.108.192-.377.497-.682.874-.874C4.52 5 5.08 5 6.2 5h11.6c1.12 0 1.68 0 2.107.218.377.192.683.497.875.874.218.427.218.987.218 2.105V9M3 9h18M7 15h4m10-4V9"/></svg>
							Pay
							<svg class="payment-form__submit" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path fill="#fff" stroke="#fff" d="M12 22c5.421 0 10-4.579 10-10h-2c0 4.337-3.663 8-8 8s-8-3.663-8-8 3.663-8 8-8V2C6.579 2 2 6.58 2 12c0 5.421 4.579 10 10 10Z"/></svg>
						</button>
						<div class="payment-form__note">
							By clicking you agree of the terms and conditions of <br>
							the <a href="#">Public Agreement</a> for the provision of payment services.
						</div>
                    </div>

                    <div class="payment-form__block">
                        <h3 class="payment-form__subtitle">Bank card details</h3>
                        <div class="payment-form__summary">
                            <div class="payment-form__summary-item">
                                <p>Commission: <span id="commission">0,00</span><span>KZT</span></p>
                                <p>Will be debited: <span id="totalDebited">0,00</span><span>KZT</span></p>
                                <p>Will be charged: <span id="totalCharged">0,00</span><span>KZT</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>

        <section class="services__text">
            <div class="container">
                <div class="services__text-item">
                    <h1>Beeline</h1>
                    <p>Моментальное <b>пополнение Beeline Казахстан</b> без регистрации и комиссий. Просто введите номер телефона, укажите сумму и подтвердите платёж – и всё готово. Деньги поступают на счёт моментально. С Pay+ вы всегда на связи: наш сервис работает круглосуточно и оптимизирован для любых устройств.</p>
                </div>
            </div>
        </section>

		<section class="faq faq-payment">
			<div class="container">
				<p class="title-section">FAQ</p>
				<div class="accordion">
					<div class="col">
						<div class="accordion-item">
							<button id="accordion-button-1" aria-expanded="false">
								<span class="accordion-title">How long does the money transfer go?</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>Modern money transfers are almost instant. If you have an unstable internet connection, the payment process may take longer. The processing itself lasts from 5 seconds to 24 hours.</p>
							</div>
						</div>
						
						<div class="accordion-item">
							<button id="accordion-button-3" aria-expanded="false">
								<span class="accordion-title">The recipient hasn’t received the money. What can you do?</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>In exceptional cases, a money transfer may be delayed for up to 24 hours. If the funds haven’t reached the recipient's card even after this period, please contact our support at +7 707 342 44 83.</p>
							</div>
						</div>
						
						<div class="accordion-item">
							<button id="accordion-button-5" aria-expanded="false">
								<span class="accordion-title">How to contact Pay+ support?</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>You can contact our support at +7 707 342 44 83.</p>
							</div>
						</div>
						
						<div class="accordion-item">
							<button id="accordion-button-7" aria-expanded="false">
								<span class="accordion-title">What do I need p2p transfers for</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>Card-to-card money transfers are among the world’s most popular financial services. This is no longer just a convenient option, but a necessary tool for everyday financial life. Pay for services, help your family, transfer funds between your bank accounts – all these tasks should be solved quickly, safely and without unnecessary steps. This is the principle of the Pay+. We have created a solution that combines fast online money transfers and high-end intuitive design. All you need is to enter the recipient's card number, indicate the amount and confirm the transaction. The process takes less than a minute, and the funds are credited almost instantly. The service operates in 24/7 mode, without days off and tech breaks.</p>
							</div>
						</div>
						
						<div class="accordion-item">
							<button id="accordion-button-9" aria-expanded="false">
								<span class="accordion-title">Why I should choose Pay+?</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>We have spent a lot of time on the design to makePay+ interface simple and intuitive. The entire process is designed for a minimum user timespending and effort. We regularly update the platform, adding useful features and improving performance. In case of questions or difficulties, the support service is always in touch - quickly, politely and to the point. Pay+ money transfers are a combination of technology, reliability and comfort. We strive for maximum conversion, and therefore every transaction is important to us. Trust your card-to-card transfers to a platform that knows what’s important to you.</p>
							</div>
						</div>
	                </div>
					<div class="col">
					<div class="accordion-item">
							<button id="accordion-button-2" aria-expanded="false">
								<span class="accordion-title">What payment system cards are available for money transfers?</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>International payment system cards Visa and Mastercard.</p>
							</div>
						</div>
<div class="accordion-item">
							<button id="accordion-button-4" aria-expanded="false">
								<span class="accordion-title">An error occurred during payment. What to do?</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>If the funds were not debited, try again. The payment may not have been processed for a number of reasons (for example, an unstable internet connection). If the funds have been written off, please contact our support at +7 707 342 44 83.</p>
							</div>
						</div>
<div class="accordion-item">
							<button id="accordion-button-6" aria-expanded="false">
								<span class="accordion-title">What are the limits for money transfers?</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>The main limit is: the payment must be from 500 to 500,000 KZT per transaction. Important: each bank may impose additional limits on money transfers on its cards. This information is usually available in your banking.</p>
							</div>
						</div>
						<div class="accordion-item">
							<button id="accordion-button-8" aria-expanded="false">
								<span class="accordion-title">Transfers are safe?</span>
								<span class="icon" aria-hidden="true"><img src="assets/img/payment-arrow.svg" alt=""></span>
							</button>
							<div class="accordion-content">
								<p>Security is our priority. Each transaction undergoes multi-level protection: automatic anti-fraud mechanisms and internal monitoring systems. Therefore, each Pay+ secure transfer meets the requirements of international payment standards and PCI DSS cybersecurity standards. We support cards of all major banks of Kazakhstan issued by Visa and Mastercard  international payment systems. This allows you to use card-to-card transfers in any situation – from quick transfer to relatives to business payments or other personal financial operations.</p>
							</div>
						</div>
					</div>
    	        </div>
			</div>
		</section>
    </main>

<?php include("footer.php"); ?>