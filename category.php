<?php require 'header.php'; ?>
    <section class="main">
        <img src="/Диплом/images/rolls-photo/zapecenui-roll-kurka-kranch.png" alt="">
        <div class="container">
            <div class="banner-catalog">
                <div class="banner-catalog-item">
                    <img src="/Диплом/images/catalog-banner.png" alt="catalog-banner">
                </div>
            </div>

            <?php
                // Підключення до бази даних
                $servername = "localhost";
                $username = "root";
                $password = "root";
                $dbname = "Tomaxa";

                $title_categories = array(
                    "rolls" => "Роли",
                    "kits" => "Набори",
                    "sushi" => "Суші",
                    "salads" => "Салати",
                    "hot meals" => "Гарячі страви",
                    "desserts" => "Десерти",
                    "vegetarian" => "Вегетаріанські"
                );

                $img_categories = array(
                    "rolls" => "/Диплом/images/title-rolls.png",
                    "kits" => "/Диплом/images/title-kits.png",
                    "sushi" => "/Диплом/images/title-sushi.png",
                    "salads" => "/Диплом/images/title-salads.png",
                    "hot meals" => "/Диплом/images/title-hot meals.png",
                    "desserts" => "/Диплом/images/title-deserts.png",
                    "vegetarian" => "/Диплом/images/title-vegetarian.png"
                );

                $category = $_GET['category'];

                if ($category && isset($title_categories[$category])) {
                    echo '<div class="row-1">';
                    echo '<div class="title-row">';
                    echo '<h2>' . $title_categories[$category] . '<img class="img-rolls-title" src="' . (isset($img_categories[$category]) ? $img_categories[$category] : '/Диплом/images/title-rolls.png') . '" alt="' . $category . '"><span class="custom-number">01</span><img class="img-rolls-title" src="' . (isset($img_categories[$category]) ? $img_categories[$category] : '/Диплом/images/title-rolls.png') . '" alt="' . $category . '"></h2>';
                    echo '</div>';
                    echo '</div>';
                } else {
                    echo '<div class="row-1">';
                    echo '<div class="title-row">';
                    echo '<h2>Роли <img class="img-rolls-title" src="/Диплом/images/title-rolls.png" alt="rolls"><span class="custom-number">01</span><img class="img-rolls-title" src="/Диплом/images/title-rolls.png" alt="rolls"></h2>';
                    echo '</div>';
                    echo '</div>';
                }

                $conn = new mysqli($servername, $username, $password, $dbname);

                // Перевірка підключення
                if ($conn->connect_error) {
                    die("Помилка підключення: " . $conn->connect_error);
                }

                // Запит до бази даних для вибору всіх фільтрів
                $sql = "SELECT id_filter, name_filter FROM filters WHERE category = '$category'";
                $result = $conn->query($sql);

                // Лічильник для кожних 8 фільтрів
                $count = 0;

                // Виведення кнопок з фільтрами
                if ($result->num_rows > 0) {
                
                    echo '<div class="button-container">';
                    
                    // Виведення кнопок для кожного запису з бази даних
                    while($row = $result->fetch_assoc()) {
                        // Якщо лічильник досягає 0, відкривається новий ряд
                        if ($count % 8 == 0) {
                            echo '<div class="button-row">';
                        }
                        
                        echo '<button id="' . htmlspecialchars($row["name_filter"]) . '" class="button-design ';
                        echo '">' . htmlspecialchars($row["name_filter"]) . '</button>';
                        
                        // Якщо лічильник досягає 7, закривається ряд
                        if ($count % 8 == 7) {
                            echo '</div>';
                        }
                        
                        $count++;
                    }
                    
                    echo '</div>';
                } else {
                    // echo "Не знайдено жодного фільтру";
                }
                $conn->close();
            ?>

            <div class="wrapper-rolls">
        <?php

            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "Tomaxa";

            // Підключення до бази даних
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Перевірка підключення
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $category = $_GET['category'];

            // Перевірка, чи були передані параметри фільтра та категорії
            if(isset($_GET['filter']) && !empty($_GET['filter']) && isset($_GET['category']) && !empty($_GET['category'])) {
                $filter = $_GET['filter'];
                $category = $_GET['category'];
                // Підготовка SQL-запиту з урахуванням вибраного фільтра та категорії
                $sql = "SELECT * FROM Products WHERE filters LIKE '%$filter%' AND category = '$category'";
            } elseif (isset($_GET['filter']) && !empty($_GET['filter'])) {
                // Якщо вибрано лише фільтр
                $filter = $_GET['filter'];
                $sql = "SELECT * FROM Products WHERE filters LIKE '%$filter%' AND category = 'Rolls'";
            } elseif (isset($_GET['category']) && !empty($_GET['category'])) {
                // Якщо вибрано лише категорію
                $category = $_GET['category'];
                $sql = "SELECT * FROM Products WHERE category = '$category'";
            } else {
                // Якщо ні фільтр, ні категорія не вибрані, вивести всі продукти з категорії Rolls
                $sql = "SELECT * FROM Products WHERE category = 'Rolls'";
            }
            $result = $conn->query($sql);

            // Перевірка наявності результатів
            if ($result->num_rows > 0) {
                $counter = 0;
                // Виведення даних кожного продукту
                while($row = $result->fetch_assoc()) {
                    if ($counter % 3 == 0) {
                        echo '<div class="row-rolls">';
                    }
                    echo '<div class="wrapper">';
                    echo '<a class="link-product-box" data-product-id="' . $row["product_id"] . '">';
                    echo '<div class="product-box-rolls">';
                    echo '<img class="img-product-box" src="' . $row["img_path"] . '" alt="' . $row["title"] . '">';
                    echo '<div class="text-product-box">';
                    echo '<h3>' . $row["title"] . '</h3>';
                    echo '<p class="product-description"><span class="weight">' . $row["weight"] . 'г</span> - ';

                    // Отримання інгредієнтів для поточного продукту
                    $ingredients_ids = explode("#", $row["ingredients"]);
                    $ingredient_names = array();

                    // Запит до таблиці інгредієнтів для отримання назв інгредієнтів
                    foreach ($ingredients_ids as $ingredient_id) {
                        $ingredient_sql = "SELECT name FROM Ingredients WHERE id_ingredients = $ingredient_id";
                        $ingredient_result = $conn->query($ingredient_sql);
                        if ($ingredient_result->num_rows > 0) {
                            $ingredient_row = $ingredient_result->fetch_assoc();
                            $ingredient_names[] = $ingredient_row["name"];
                        }
                    }

                    echo implode(", ", $ingredient_names);

                    echo '</p>';
                    echo '</a>';
                    echo '<div class="wrapper">';
                    echo '<a class="product-box-btn" data-product-id="' . $row["product_id"] . '" data-product-title="' . $row["title"] . '" data-product-img="' . $row["img_path"] . '" data-product-price="' . intval($row["price"]) . '">Купити</a>';
                    echo '<p class="product-box-price"><span class="product-box-price-big">' . intval($row["price"]) . '</span><span class="currency">грн</span></p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    if (($counter + 1) % 3 == 0 || ($counter + 1) == $result->num_rows) {
                        echo '</div>';
                    }
                    $counter++;
                }
            } else {
                echo "0 results";
            }

            $conn->close();
        ?>
            </div>
        </div>
    </section>
    <?php require 'footer.php'; ?>

<!-- // Перенаправлення користувача на сторінку з деталями продукту -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
  const productBoxes = document.querySelectorAll(".link-product-box");

  productBoxes.forEach(function (box) {
    box.addEventListener("click", function () {
      const productId = this.getAttribute("data-product-id");
      
      // Отримання поточної категорії з URL
      const urlParams = new URLSearchParams(window.location.search);
      const currentCategory = urlParams.get('category');
      
      // Отримання обраного фільтру з URL
      const currentFilter = urlParams.get('filter');

      // Новий URL з параметрами категорії, фільтра та ідентифікатора продукту
      const url = `products.php?category=${currentCategory}&filter=${currentFilter}&product_id=${productId}`;
      
      // Перенаправлення користувача на products.php з параметрами
      window.location.href = url;
    });
  });
});
</script>

<!-- // Фільтрування продуктів на сторінці -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".button-design");

    // Перевірка URL-адреси при завантаженні сторінки
    const urlParams = new URLSearchParams(window.location.search);
    const currentFilter = urlParams.get('filter');
    buttons.forEach(function (button) {
        if (button.id === currentFilter) {
            button.classList.add("active");
        }
    });

    // Обробник кліків на кнопках фільтрів
    buttons.forEach(function (button) {
        button.addEventListener("click", function () {
            const filter = this.id; // id кнопки, яка була клікнута
            filterProducts(filter); // Функція фільтрації з параметром фільтра
        });
    });
});

function filterProducts(filter) {
    // Встановлення параметра фільтра в URL і перезавантаження сторінки
    window.location.href = `category.php?filter=${filter}&category=<?php echo $_GET['category']; ?>`;
}
</script>

<!-- // Додавання товарів у кошик -->
<script>
        document.addEventListener('DOMContentLoaded', function() {
        const addToCartButtons = document.querySelectorAll('.product-box-btn');

        addToCartButtons.forEach(button => {
            button.addEventListener('click', function() {
                const productID = this.getAttribute('data-product-id');
                const productTitle = this.getAttribute('data-product-title');
                const productImg = this.getAttribute('data-product-img');
                const productPrice = parseInt(this.getAttribute('data-product-price'));

                const cartItem = {
                    id: productID,
                    title: productTitle,
                    img: productImg,
                    price: productPrice
                };

                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                const itemExists = cart.some(item => item.id === productID);

                if (itemExists) {
                    alert('Цей товар вже є в корзині!');
                } else {
                    cart.push(cartItem);
                    localStorage.setItem('cart', JSON.stringify(cart));
                    alert('Товар додано до корзини!');
                }
            });
        });
    });
    </script>
</body>
</html>
