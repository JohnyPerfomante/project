// Оформлення замовлення
document.addEventListener("input", function () {
  const name = document.getElementById("name").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const email = document.getElementById("email").value.trim();
  const address = document.getElementById("address").value.trim();
  const quantity = document.getElementById("quantity").value.trim();
  const submitButton = document.getElementById("submit-order");

  if (name && phone && email && address && quantity) {
    submitButton.style.display = "block";
  } else {
    submitButton.style.display = "none";
  }
});

// Корзина
document.addEventListener("DOMContentLoaded", function () {
  const cartItemsContainer = document.getElementById("cart-items");
  const totalCostElement = document.getElementById("total-cost");
  const emptyCartMessage = document.getElementById("empty-cart-message");
  const backToHomeButton = document.getElementById("back-to-home");

  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  let totalCost = 0;

  if (cart.length === 0) {
    emptyCartMessage.style.display = "block";
    backToHomeButton.style.display = "block";
  } else {
    cart.forEach((item) => {
      const cartItem = document.createElement("div");
      cartItem.classList.add("cart-item");
      cartItem.id = `item-${item.id}`;
      cartItem.innerHTML = `
          <img src="${item.img}" alt="${item.title}" class="cart-item-img">
          <h3 class="cart-item-title">${item.title}</h3>
          <div class="item-controls">
            <button class="decrease">−</button>
            <span class="quantity">1</span>
            <button class="increase">+</button>
          </div>
          <p class="cart-item-price">${item.price} грн</p>
          <button class="remove-item">×</button>
        `;
      cartItemsContainer.appendChild(cartItem);

      totalCost += item.price;

      // обробник подій для керування кожним елементом
      const quantityElement = cartItem.querySelector(".quantity");
      const priceElement = cartItem.querySelector(".cart-item-price");
      const increaseButton = cartItem.querySelector(".increase");
      const decreaseButton = cartItem.querySelector(".decrease");
      const removeButton = cartItem.querySelector(".remove-item");

      let quantity = 1; // Початкова кількість
      let price = item.price; // Ціна на поточний товар

      updateTotalPrice();

      increaseButton.addEventListener("click", function () {
        quantity++;
        quantityElement.textContent = quantity;
        updateTotalPrice();
      });

      decreaseButton.addEventListener("click", function () {
        if (quantity > 1) {
          quantity--;
          quantityElement.textContent = quantity;
          updateTotalPrice();
        }
      });

      removeButton.addEventListener("click", function () {
        cartItemsContainer.removeChild(cartItem);
        totalCost -= price * quantity;
        updateTotalPrice();

        // Видалення елементів із localStorage
        cart = cart.filter((cartItemObj) => cartItemObj.id !== item.id);

        localStorage.setItem("cart", JSON.stringify(cart));

        // Оновлення загальної вартості. Перевірка на порожній кошик
        updateTotalCost();
        if (cart.length === 0) {
          emptyCartMessage.style.display = "block";
          backToHomeButton.style.display = "block";
        }
      });
    });

    updateTotalCost();
  }

  function updateTotalCost() {
    const deliveryCost =
      parseInt(document.getElementById("delivery-cost").innerText) || 0;
    const packagingCost =
      parseInt(document.getElementById("packaging-cost").innerText) || 0;
    const finalCost = totalCost + deliveryCost + packagingCost;
    totalCostElement.innerText = finalCost;
  }

  function updateTotalPrice() {
    let totalPrice = 0;
    const cartItems = document.querySelectorAll(".cart-item");
    cartItems.forEach((cartItem) => {
      const quantity = parseInt(
        cartItem.querySelector(".quantity").textContent
      );
      const price = parseFloat(
        cartItem.querySelector(".cart-item-price").textContent
      );
      totalPrice += quantity * price;
    });
    totalCost = totalPrice;
    updateTotalCost();
  }
});

// Обробка замовлення
document.addEventListener("DOMContentLoaded", function () {
  const submitOrderButton = document.getElementById("submit-order");

  submitOrderButton.addEventListener("click", function () {
    const name = document.getElementById("name").value;
    const phone = document.getElementById("phone").value;
    const email = document.getElementById("email").value;
    const address = document.getElementById("address").value;
    const quantity = document.getElementById("quantity").value;
    const comments = document.getElementById("comments").value;
    const totalCost = document.getElementById("total-cost").innerText;

    let productIdString = ""; // Змінна для збереження product_id як рядка
    let productQuantitiesString = ""; // Змінна для збереження productQuantities як рядка

    const cartItems = document.querySelectorAll(".cart-item");
    cartItems.forEach((cartItem, index) => {
      const itemId = cartItem.id.split("-")[1]; // індекс товару
      const quantity = cartItem.querySelector(".quantity").textContent;

      // Додавання id і кількість до рядків, розділення їх символом '#'
      productIdString += (index > 0 ? "#" : "") + itemId;
      productQuantitiesString += (index > 0 ? "#" : "") + quantity;
    });

    const formData = new FormData();
    formData.append("product_id", productIdString);
    formData.append("product_quantities", productQuantitiesString);
    formData.append("name", name);
    formData.append("phone", phone);
    formData.append("email", email);
    formData.append("address", address);
    formData.append("quantity", quantity);
    formData.append("comments", comments);
    formData.append("totalCost", totalCost);

    // Надсилання даних на сервер
    fetch("save-order.php", {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        console.log("Success:", data);

        // Очищення корзини з локальної пам'яті
        localStorage.removeItem("cart");

        // Очищення відображення корзини на сторінці
        document
          .querySelectorAll(".cart-item")
          .forEach((item) => item.remove());

        // Очищення загальної суми
        document.getElementById("total-cost").innerText = "0";

        // Очищення форми
        document.getElementById("name").value = "";
        document.getElementById("phone").value = "";
        document.getElementById("email").value = "";
        document.getElementById("address").value = "";
        document.getElementById("quantity").value = "1";
        document.getElementById("comments").value = "";

        alert("Ваше замовлення було успішно оформлено!");
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("Сталася помилка при оформленні замовлення. Спробуйте ще раз.");
      });
  });
});
