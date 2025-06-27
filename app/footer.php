
<script src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/imask/7.6.1/imask.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/services.js"></script>

 
<script>
const data = [
  { label: "Beeline", url: "/services-beeline.php" },
  { label: "Steam", url: "/services-steam.php" },
  { label: "Backend Developer", url: "https://example.com/backend" },
  { label: "Fullstack Engineer", url: "https://example.com/fullstack" },
  { label: "DevOps Specialist", url: "https://example.com/devops" },
  { label: "DevOps Specialist", url: "https://example.com/devops" },
  { label: "DevOps Specialist", url: "https://example.com/devops" },
  { label: "DevOps Specialist", url: "https://example.com/devops" },
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

// ✅ Показати весь список при фокусі, якщо поле порожнє
input.addEventListener("focus", function () {
  if (!this.value.trim()) {
    renderList(data);
  }
});

// Закрытие списка при клике вне поля
document.addEventListener("click", (e) => {
  if (!e.target.closest(".services-search__wrapper")) {
    list.style.display = "none";
  }
});
</script>


<!-- <script src="assets/js/services.js"></script> -->

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