<?php include("header.php"); ?>
<title>Services ENG</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
</head>

<body>
    <main>

        <section class="services">
            <div class="container">
                <div class="services__header">
                    <div class="services__tab">
                        <span><a href="services.php">Сервисы</a></span>
                        <!-- <svg width="5" height="8" viewBox="0 0 5 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L4 4L1 7" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg> -->
                        <!-- <span><span><a href="#"><b>Another</b></a></span></span> -->

                    </div>
                    <div class="services__select">
						<div class="services-search__wrapper">
							<input
							type="text"
							class="services-search__input"
							placeholder="Search"
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
                            <span>Телефония</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-fin.php">
                            <div class="services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" fill="none"><path fill="#fff" fill-rule="evenodd" d="M8.397 5.7c-.55.413-.8.908-.8 1.37 0 .462.25.958.8 1.372.552.414 1.36.7 2.295.7a1 1 0 0 1 0 2c-1.326 0-2.565-.402-3.495-1.1-.93-.698-1.6-1.738-1.6-2.971s.67-2.274 1.6-2.972C8.127 3.402 9.367 3 10.692 3c2.053 0 3.994.983 4.766 2.62a1.001 1.001 0 0 1-1.81.853C13.298 5.726 12.206 5 10.693 5c-.935 0-1.744.286-2.296.7Z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="M12.657 14.583c.551-.413.799-.908.799-1.37 0-.462-.248-.959-.8-1.372-.551-.414-1.36-.7-2.294-.7a1 1 0 0 1 0-2c1.326 0 2.565.402 3.495 1.1.93.698 1.599 1.738 1.599 2.971s-.669 2.274-1.6 2.971c-.93.698-2.168 1.1-3.494 1.1-2.053 0-3.995-.983-4.766-2.621a1 1 0 0 1 1.809-.853c.352.748 1.444 1.474 2.957 1.474.935 0 1.743-.286 2.295-.7ZM10.5 1a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0V2a1 1 0 0 1 1-1Z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="M10.5 16a1 1 0 0 1 1 1v1a1 1 0 0 1-2 0v-1a1 1 0 0 1 1-1Z" clip-rule="evenodd"/></svg>
                            </div>
                            <span>Фин. организации</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="index.php">
                            <div class="services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 13 3 3m0 0-3 3m3-3H5m3-5L5 8m0 0 3-3M5 8h14"/></svg>
                            </div>
                            <span>С карты на карту</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-games.php">
                            <div class="services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16 13 3 3m0 0-3 3m3-3H5m3-5L5 8m0 0 3-3M5 8h14"/></svg>
                            </div>
                            <span>Он-лайн игры</span>
                        </a>
                    </div>
                    <div class="services__item">
                        <a href="services-list.php">
                            <div class="services__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" fill="none"><path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21.5 12-9 6-9-6m18 4-9 6-9-6m18-8-9 6-9-6 9-6 9 6Z"/></svg>
                            </div>
                            <span>Прочее</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <div class="services__text">
            <div class="container">
                <div class="services__text-item">
                    <h1>Pay+: единый сервис оплаты в Казахстане.</h1>
                    <p>Развивая свои финтех-инструменты для бизнеса, мы создали удобный сервис оплаты, чтобы вы могли забыть об очередях к платежному терминалу, бумажных чеках и неудобных приложениях. Онлайн платежи на Pay+ – это быстрый, безопасный і удобный способ оплатить услуги через интернет: от пополнения счета онлайн до коммуналки, связи или подписок.  Pay+  это платежный сервис для Казахстана, который мы делаем с вниманием к мелким деталям, из которых состоит качественный сервис. Оплата онлайн теперь такая, какой она и должна быть – простая и доступная для всех.</p>
                </div>
            </div>
        </div>

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