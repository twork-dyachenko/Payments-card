
function setupPaymentForm({
  formSelector,
  inputsConfig,
  commissionSelector,
  totalDebitedSelector,
  totalChargedSelector,
  submitButtonSelector,
  formSubmitCallback
}) {
  document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(formSelector);
    if (!form) return;

    const inputs = form.querySelectorAll(".payment-form__input");
    const amountInput = form.querySelector('[name="amount"]');
    const commissionEl = form.querySelector(commissionSelector);
    const totalDebitedEl = form.querySelector(totalDebitedSelector);
    const totalChargedEl = form.querySelector(totalChargedSelector);
    const submitButton = form.querySelector(submitButtonSelector);
    const payBtn = form.querySelector(".payment-form__pay-btn");

    const translations = {
      en: { required: "is required" },
      ru: { required: "обязательное" },
      kk: { required: "Бұл өріс қажет" },
    };
    const currentLang = document.documentElement.lang || 'en';

    function toggleError(el, hasError) {
      el.classList.toggle("payment-form__input--error", hasError);
    }

    function toggleValid(input, isValid) {
      input.classList.toggle("payment-valid", isValid);
    }

    function calculateCommission(amount) {
      const commission = +(amount * 0.01).toFixed(2);
      const total = +(amount + commission).toFixed(2);
      return { commission, total, charged: amount.toFixed(2) };
    }

    function updateAmountSummary() {
      const raw = amountInput?.value.replace(',', '.').replace(/\s/g, '') || '0';
      const amount = parseFloat(raw);
      if (isNaN(amount)) {
        commissionEl.textContent = '0,00';
        totalDebitedEl.textContent = '0,00';
        totalChargedEl.textContent = '0,00';
        return;
      }
      const { commission, total, charged } = calculateCommission(amount);
      commissionEl.textContent = commission.toFixed(2).replace('.', ',');
      totalDebitedEl.textContent = total.toFixed(2).replace('.', ',');
      totalChargedEl.textContent = parseFloat(charged).toFixed(2).replace('.', ',');
    }

    function isValidLuhn(number) {
      let sum = 0, shouldDouble = false;
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

    function isValidExpiry(value) {
      value = value.replace(/^(\d{2})\s*\/\s*(\d{2})$/, "$1 / $2");
      const match = value.match(/^(\d{2}) \/ (\d{2})$/);
      if (!match) return false;
      const [_, month, year] = match.map(Number);
      if (month < 1 || month > 12) return false;
      const now = new Date();
      const inputDate = new Date(2000 + year, month - 1);
      return inputDate >= new Date(now.getFullYear(), now.getMonth());
    }

    function isValidFullName(name) {
      return /^[a-zA-Zа-яА-ЯёЁґҐіІїЇңҒқҚүҮұҰһҺӘәӨө]{2,}\s[a-zA-Zа-яА-ЯёЁґҐіІїЇңҒқҚүҮұҰһҺӘәӨө]{2,}$/.test(name);
    }

    function validateInput(input, showError = true) {
      const name = input.name;
      const value = input.value.trim();
      let valid = true;
    
      switch (inputsConfig[name]) {
        case "phone": {
          const digits = value.replace(/\D/g, "");
          valid = /^77\d{9}$/.test(digits);
          break;
        }
        case "wallet":
          valid = /^[a-zA-Z0-9]{5,24}$/.test(value);
          break;
        case "amount": {
          const num = parseFloat(value.replace(',', '.').replace(/\s/g, ''));
          valid = !isNaN(num) && num >= 10 && num <= 500000;
          break;
        }
        case "card": {
          const digits = value.replace(/\s/g, '');
          valid = /^\d{16}$/.test(digits) && isValidLuhn(digits);
          break;
        }
        case "expiry":
          valid = isValidExpiry(value);
          break;
        case "cvv":
          valid = /^\d{3}$/.test(value);
          break;
        case "name":
          valid = isValidFullName(value);
          break;
        default:
          valid = input.checkValidity();
          break;
      }
    
      toggleValid(input, valid);
    
      if (showError) {
        // Показываем ошибку, если невалидно
        toggleError(input, !valid);
      } else {
        // При вводе — убираем ошибку, если поле валидное
        if (valid) {
          toggleError(input, false);
        }
      }
    
      return valid;
    }
    
    

    const touchedMap = new Map();

    inputs.forEach((input, index) => {
      touchedMap.set(input, false);
    
      input.addEventListener("input", () => {
        if (input.name === "amount") updateAmountSummary();
    
        const isValidNow = validateInput(input, false);
        if (isValidNow) touchedMap.set(input, true);
    
        // Авто-переход фокуса
        // Убираем пробелы из значения для подсчета длины (для card и других)
        let valLength = input.value.replace(/\s/g, '').length;
    
        // Особые условия по имени поля
        switch (input.name) {
          case 'senderCard':
            // 16 цифр для карты
            if (valLength >= 16) {
              focusNext(index);
            }
            break;
          case 'expiry':
            // Длина с форматом "MM / YY" = 7 символов, но учитываем 5 значимых (цифры + " / ")
            if (input.value.length >= 7) {
              focusNext(index);
            }
            break;
          case 'cvv':
            if (valLength >= 3) {
              focusNext(index);
            }
            break;
          case 'senderFullName':
            // Можно добавить логику, например, если введено 2 слова, то переключаем фокус
            if (/^\S+\s+\S+/.test(input.value.trim())) {
              focusNext(index);
            }
            break;
          case 'senderPhone':
            // Номер телефона +7 (XXX) XXX-XX-XX = фиксированная длина 18 символов
            if (input.value.length >= 18) {
              focusNext(index);
            }
            break;
          case 'amount':
            // Например, если длина >= 1 — можно переходить (настраиваем по необходимости)
            break;
          default:
            // Для других полей с maxlength
            const maxLength = input.getAttribute('maxlength');
            if (maxLength && valLength >= maxLength) {
              focusNext(index);
            }
            break;
        }
    
        checkFormValidity();
      });
    
      input.addEventListener("blur", () => {
        const value = input.value.trim();
        if (value !== "") {
          touchedMap.set(input, true);
          validateInput(input, true);
        }
        checkFormValidity();
        if (input.name === "amount") updateAmountSummary();
      });
    });
    
    function focusNext(currentIndex) {
      const nextInput = inputs[currentIndex + 1];
      if (nextInput) {
        nextInput.focus();
      }
    }
    
    
    

    inputs.forEach((input) => {
      const value = input.value.trim();
      if (value !== '') {
        touchedMap.set(input, true);
        validateInput(input);
      }
    });

    checkFormValidity();

    function checkFormValidity() {
      let allFieldsValid = true;
      let allFieldsTouchedOrFilled = true;
    
      inputs.forEach((input) => {
        const touched = touchedMap.get(input);
        const value = input.value.trim();
    
        if (touched || value !== '') {
          // Проверяем валидность без подсветки ошибок
          if (!validateInput(input, false)) {
            allFieldsValid = false;
          }
        } else {
          allFieldsTouchedOrFilled = false;
        }
      });
    
      const enableSubmit = allFieldsValid && allFieldsTouchedOrFilled;
    
      if (submitButton) {
        submitButton.disabled = !enableSubmit;
        submitButton.classList.toggle("payment-form__submit--disabled", !enableSubmit);
      }
    
      if (payBtn) {
        payBtn.disabled = !enableSubmit;
        payBtn.classList.toggle("payment-form__submit--disabled", !enableSubmit);
      }
    }
    

    const phoneInput = form.querySelector('[name="senderPhone"]');
    if (phoneInput) {
      phoneInput.addEventListener("focus", (e) => {
        if (!e.target.value.startsWith("+7 (")) {
          e.target.value = "+7 (";
        }
      });

      phoneInput.addEventListener("input", (e) => {
        let digits = e.target.value.replace(/\D/g, '').slice(0, 11);
        const parts = [
          digits.slice(0, 1),
          digits.slice(1, 4),
          digits.slice(4, 7),
          digits.slice(7, 9),
          digits.slice(9, 11),
        ];

        let formatted = '+7';
        if (parts[1]) formatted += ` (${parts[1]}`;
        if (parts[2]) formatted += `) ${parts[2]}`;
        if (parts[3]) formatted += `-${parts[3]}`;
        if (parts[4]) formatted += `-${parts[4]}`;

        e.target.value = formatted;
      });
    }

    const senderCardInput = form.querySelector('[name="senderCard"]');
    if (senderCardInput) {
      senderCardInput.addEventListener("input", (e) => {
        let raw = e.target.value.replace(/\D/g, "").slice(0, 16);
        e.target.value = raw.replace(/(\d{4})(?=\d)/g, "$1 ").trim();
      });
    }

    const expiryInput = form.querySelector('[name="expiry"]');
    if (expiryInput) {
      expiryInput.addEventListener("input", (e) => {
        let raw = e.target.value.replace(/[^\d]/g, "");
        if (raw.length > 4) raw = raw.slice(0, 4);
        e.target.value = raw.length >= 3 ? raw.slice(0, 2) + " / " + raw.slice(2) : raw;
      });
    }

    form.addEventListener("submit", (e) => {
      e.preventDefault();
      let isValid = true;

      inputs.forEach((input) => {
        touchedMap.set(input, true);
        const valid = validateInput(input);
        isValid = isValid && valid;

        if (!input.value.trim()) {
          const basePlaceholder = input.getAttribute("data-placeholder") || input.placeholder.replace(` ${translations[currentLang].required}`, "");
          input.placeholder = `${basePlaceholder} ${translations[currentLang].required}`;
          input.setAttribute("data-placeholder", basePlaceholder);
        }
      });

      if (isValid) {
        submitButton?.classList.add("payment-form__submit--visible");
        submitButton?.classList.remove("payment-form__submit--disabled");
        if (typeof formSubmitCallback === 'function') formSubmitCallback(form);
      }
    });

    payBtn?.addEventListener("click", () => {
      if (submitButton?.classList.contains("payment-form__submit--disabled")) return;
      submitButton?.classList.add("payment-form__submit--visible");
      submitButton?.classList.remove("payment-form__submit--disabled");
    });

    submitButton?.classList.add("payment-form__submit--disabled");
    submitButton?.classList.remove("payment-form__submit--visible");
    updateAmountSummary();
  });
}

// === Инициализация всех форм ===
setupPaymentForm({
  formSelector: ".services__tell form",
  inputsConfig: {
    senderPhone: "phone",
    amount: "amount",
    senderCard: "card",
    expiry: "expiry",
    cvv: "cvv",
    senderFullName: "name",
  },
  commissionSelector: "#commission",
  totalDebitedSelector: "#totalDebited",
  totalChargedSelector: "#totalCharged",
  submitButtonSelector: ".payment-form__submit",
  formSubmitCallback: (form) => {
    // form.submit();
  }
});

setupPaymentForm({
  formSelector: ".services-steam--form",
  inputsConfig: {
    walletNumber: "wallet",
    amount: "amount",
  },
  commissionSelector: "#commission",
  totalDebitedSelector: "#totalDebited",
  totalChargedSelector: "#totalCharged",
  submitButtonSelector: ".payment-form__submit",
  formSubmitCallback: (form) => {
    // form.submit();
  }
});

setupPaymentForm({
  formSelector: ".js-card-payment-form",
  inputsConfig: {
    senderPhone: "phone",
    senderCard: "card",
    expiry: "expiry",
    cvv: "cvv",
    senderFullName: "name",
    amount: "amount",
  },
  commissionSelector: "#commission",
  totalDebitedSelector: "#totalDebited",
  totalChargedSelector: "#totalCharged",
  submitButtonSelector: ".payment-form__submit",
  formSubmitCallback: (form) => {
    // form.submit();
  }
});

const data = [
  { label: "Activ", url: "/services-activ.php" },
  { label: "TELE2", url: "/services-tele2.php" },
  { label: "Zaimer", url: "/services-zaimer.php" },
  { label: "Koke", url: "/services-koke.php" },
  { label: "AltynCoin", url: "/services-altyn.php" },
  { label: "Steam", url: "/services-steam.php" },
  { label: "Olimpbet", url: "/services-steam.php" },
  { label: "Winline", url: "/services-steam.php" },
];

const input = document.querySelector(".services-search__input");
const list = document.getElementById("services-search__list");

function renderList(items) {
  list.innerHTML = "";
  if (items.length === 0) {
    list.style.display = "none";
    return;
  }

  items.forEach((item) => {
    const div = document.createElement("div");
    div.classList.add("services-search__item");
    div.textContent = item.label;
    div.onclick = () => {
      window.location.href = item.url;
    };
    list.appendChild(div);
  });

  list.style.display = "block";
}

input.addEventListener("input", function () {
  const query = this.value.trim().toLowerCase();
  const filtered = data.filter((item) =>
    item.label.toLowerCase().includes(query)
  );
  renderList(filtered);
});

input.addEventListener("focus", function () {
  if (!this.value.trim()) {
    renderList(data);
  }
});

document.addEventListener("click", (e) => {
  if (!e.target.closest(".services-search__wrapper")) {
    list.style.display = "none";
  }
});