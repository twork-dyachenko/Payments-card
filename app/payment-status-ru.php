<?php include("header.php"); ?>
<title>Exchange ENG</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
</head>

<body style="background: #F3F3F3;">
    <main>
        <section class="payment-status payment-status--successful">
            <div class="payment-status__header">
                <img src="assets/img/payment-done.png" alt="successful">
                <div class="payment-status__title">Денежный перевод <br> на карту **** 0100: успех.</div>
            </div>
            <div class="payment-status__body">
                <div class="payment-status__body-item">
                    <div>
                        <p>С карты</p>
                        <span>**** 7622</span>
                    </div>
                    <div>
                        <p>На карту</p>
                        <span>**** 7438</span>
                    </div>
                </div>
                <div class="payment-status__body-item">
                    <div>
                        <p>Сумма:</p>
                        <span>0,00 KZT</span>
                    </div>
                    <div>
                        <p>Комиссия:</p>
                        <span>0,00 KZT</span>
                    </div>
                </div>
                <div class="payment-status__footer">
                    <div>
                        <p>К списанию:</p>
                        <span>380.00 KZT</span>
                    </div>
                    <button class="payment-status__btn payment-status__btn--black">
                        Скачать квитанцию ​​в формате PDF
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" fill="none"><path fill="#fff" d="M.75 15.35a.75.75 0 0 1 .75.75v3.75a1.5 1.5 0 0 0 1.5 1.5h18a1.5 1.5 0 0 0 1.5-1.5V16.1a.75.75 0 1 1 1.5 0v3.75a3 3 0 0 1-3 3H3a3 3 0 0 1-3-3V16.1a.75.75 0 0 1 .75-.75Z"/><path fill="#fff" d="M11.469 18.281a.75.75 0 0 0 1.062 0l4.5-4.5a.75.75 0 0 0-1.062-1.062l-3.219 3.22V2.75a.75.75 0 1 0-1.5 0v13.19l-3.219-3.221a.751.751 0 0 0-1.062 1.062l4.5 4.5Z"/></svg>
                    </button>
                    <button class="payment-status__btn payment-status__btn--light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="29" fill="none"><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m13.5 11-3.375 3.5m0 0L13.5 18m-3.375-3.5H22.5m0 5.544v.055c0 1.307 0 1.961-.245 2.46-.216.44-.56.796-.983 1.02-.482.254-1.112.254-2.372.254H8.1c-1.26 0-1.89 0-2.37-.254a2.295 2.295 0 0 1-.985-1.02c-.245-.498-.245-1.152-.245-2.456V8.895c0-1.304 0-1.956.245-2.455.216-.439.56-.796.984-1.02.481-.254 1.11-.254 2.368-.254h10.807c1.257 0 1.887 0 2.368.254.423.224.767.582.983 1.02.245.5.245 1.153.245 2.46v.058"/></svg>
                        Вернуться на сайт
                    </button>
                </div>
            </div>
        </section>
        <div class="payment-status__text">Pay +</div>

        <section class="payment-status payment-status--error">
            <div class="payment-status__header">
                <img src="assets/img/payment-error.png" alt="error">
                <div class="payment-status__title">Денежный перевод <br> на карту **** 0100: ошибка. <br> Повторите попытку.</div>
            </div>
            <div class="payment-status__footer">
                <button class="payment-status__btn payment-status__btn--light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="29" fill="none"><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m13.5 11-3.375 3.5m0 0L13.5 18m-3.375-3.5H22.5m0 5.544v.055c0 1.307 0 1.961-.245 2.46-.216.44-.56.796-.983 1.02-.482.254-1.112.254-2.372.254H8.1c-1.26 0-1.89 0-2.37-.254a2.295 2.295 0 0 1-.985-1.02c-.245-.498-.245-1.152-.245-2.456V8.895c0-1.304 0-1.956.245-2.455.216-.439.56-.796.984-1.02.481-.254 1.11-.254 2.368-.254h10.807c1.257 0 1.887 0 2.368.254.423.224.767.582.983 1.02.245.5.245 1.153.245 2.46v.058"/></svg>
                    Вернуться на сайт
                </button>
            </div>
        </section>
        <div class="payment-status__text">Pay +</div>

        <section class="payment-status payment-status--pending">
            <div class="payment-status__header">
                <img src="assets/img/payment-pending.png" alt="pending">
                <div class="payment-status__title">Денежный перевод <br> на карту **** 0100: в обработке.</div>
            </div>
            <div class="payment-status__footer">
                <button class="payment-status__btn payment-status__btn--light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="29" fill="none"><path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m13.5 11-3.375 3.5m0 0L13.5 18m-3.375-3.5H22.5m0 5.544v.055c0 1.307 0 1.961-.245 2.46-.216.44-.56.796-.983 1.02-.482.254-1.112.254-2.372.254H8.1c-1.26 0-1.89 0-2.37-.254a2.295 2.295 0 0 1-.985-1.02c-.245-.498-.245-1.152-.245-2.456V8.895c0-1.304 0-1.956.245-2.455.216-.439.56-.796.984-1.02.481-.254 1.11-.254 2.368-.254h10.807c1.257 0 1.887 0 2.368.254.423.224.767.582.983 1.02.245.5.245 1.153.245 2.46v.058"/></svg>
                    Вернуться на сайт
                </button>
            </div>
        </section>
        <div class="payment-status__text">Pay +</div>
    </main>

<?php include("footer.php"); ?>