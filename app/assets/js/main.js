document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".payment-form");
    const inputs = form.querySelectorAll(".payment-form__input");
    const amountInput = form.querySelector('[name="amount"]');
    const expiryInput = form.querySelector('[name="expiry"]');
    let amountTouched = false;

    // Helper: add/remove error class
    function toggleError(el, hasError) {
        el.classList.toggle("payment-form__input--error", hasError);
    }

    // Luhn Algorithm
    function isValidLuhn(number) {
        let sum = 0;
        let shouldDouble = false;
        for (let i = number.length - 1; i >= 0; i--) {
            let digit = parseInt(number[i]);
            if (shouldDouble) {
                digit *= 2;
                if (digit > 9) digit -= 9;
            }
            sum += digit;
            shouldDouble = !shouldDouble;
        }
        return sum % 10 === 0;
    }
    // Обмеження введення тільки цифр для полів картки
    function restrictNonNumericInput(e) {
        e.target.value = e.target.value.replace(/\D/g, ''); // Залишаємо тільки цифри
    }

    // Додаємо обробники подій для полів картки
    document.querySelector('[name="senderCard"]').addEventListener('input', restrictNonNumericInput);
    document.querySelector('[name="recipientCard"]').addEventListener('input', restrictNonNumericInput);

    function isValidExpiry(value) {
        value = value.trim();
        value = value.replace(/^(\d{2})\s*\/\s*(\d{2})$/, '$1 / $2');
        const match = value.match(/^(\d{2}) \/ (\d{2})$/);
        if (!match) return false;
        const [_, year, month] = match.map(Number);
        if (month < 1 || month > 12) return false;
        const currentDate = new Date();
        const inputDate = new Date(2000 + year, month - 1);
        return inputDate >= new Date(currentDate.getFullYear(), currentDate.getMonth());
    }

    function isValidFullName(name) {
        return /^[a-zA-Zа-яА-ЯёЁґҐіІїЇңҒқҚүҮұҰһҺӘәӨө]{2,}\s[a-zA-Zа-яА-ЯёЁґҐіІїЇңҒқҚүҮұҰһҺӘәӨө]{2,}$/.test(name);
    }

    function isValidKZPhone(phone) {
        return /^\+77\d{9}$/.test(phone);
    }

    window.formatExpiry = (input) => {
        let raw = input.value.replace(/[^\d]/g, '');
        if (raw.length > 4) raw = raw.slice(0, 4);
        if (raw.length >= 3) {
            input.value = raw.slice(0, 2) + ' / ' + raw.slice(2);
        } else {
            input.value = raw;
        }
    };

    function toggleValid(input, isValid) {
        input.classList.toggle("payment-valid", isValid);
    }

    function validateInput(input) {
        const name = input.name;
        const value = input.value.trim();
        let valid = true;

        switch (name) {
            case "senderCard":
                valid = /^\d{16}$/.test(value) && isValidLuhn(value);
                break;
            case "cvv":
                valid = /^\d{3}$/.test(value);
                break;
            case "expiry":
                valid = isValidExpiry(value);
                break;
            case "senderFullName":
            case "recipientFullName":
                valid = isValidFullName(value);
                break;
            case "senderPhone":
                valid = isValidKZPhone(value);
                break;
            case "recipientCard":
                valid = /^\d{16}$/.test(value) && isValidLuhn(value);
                break;
            case "amount":
                const num = parseFloat(value.replace(',', '.').replace(/\s/g, ''));
                if (!amountTouched) {
                    valid = true;
                    break;
                }
                valid = !isNaN(num) && num >= 5 && num <= 4990;
                break;
        }

        toggleError(input, !valid);
        toggleValid(input, valid);
        return valid;
    }

    function calculateCommission(amount) {
        const commission = +(amount * 0.01).toFixed(2);
        const totalToPay = +(amount + commission).toFixed(2);
        return { commission, totalToPay };
    }

    function updateAmountSummary() {
        if (amountInput && validateInput(amountInput)) {
            let raw = amountInput.value.replace(',', '.').replace(/\s/g, '');
            const amount = parseFloat(raw);

            if (isNaN(amount)) {
                document.querySelector("#commission").textContent = '0,00';
                document.querySelector("#totalDebited").textContent = '0,00';
                document.querySelector("#totalToPay").textContent = '0,00';
                return;
            }

            const { commission, totalToPay } = calculateCommission(amount);
            document.querySelector("#commission").textContent = commission;
            document.querySelector("#totalDebited").textContent = amount;
            document.querySelector("#totalToPay").textContent = totalToPay;
        } else {
            document.querySelector("#commission").textContent = '0,00';
            document.querySelector("#totalDebited").textContent = '0,00';
            document.querySelector("#totalToPay").textContent = '0,00';
        }
    }

    // Обробники подій для всіх інпутів
    inputs.forEach((input) => {
        input.addEventListener("blur", () => validateInput(input));
        input.addEventListener("input", () => validateInput(input));
    });

    // Особлива обробка поля "amount"
    amountInput.addEventListener("input", () => {
        amountTouched = true;
        validateInput(amountInput);
        updateAmountSummary();
    });

    // Форматування поля expiry при вводі
    expiryInput.addEventListener("input", (e) => {
        formatExpiry(e.target);
        validateInput(e.target);
    });

    // Початкове оновлення підсумку
    updateAmountSummary();

    // Загальна перевірка форми
    window.validateForm = (event) => {
        event.preventDefault();
        let isValid = true;

        inputs.forEach((input) => {
            const valid = validateInput(input);
            isValid = isValid && valid;

            if (!input.value.trim()) {
                const basePlaceholder = input.getAttribute("data-placeholder") || input.placeholder.replace(" is required", "");
                input.placeholder = `${basePlaceholder} is required`;
                input.setAttribute("data-placeholder", basePlaceholder);
            }
        });

        if (isValid) {
            console.log("Форма валідна");
        }
    };
});
