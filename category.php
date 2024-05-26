<?php require 'header.php'; ?>
    <section class="main">
        <img src="/Диплом/images/rolls-photo/zapecenui-roll-kurka-kranch.png" alt="">
        <div class="container">
            <div class="banner-catalog">
                <div class="banner-catalog-item">
                    <img src="/Диплом/images/catalog-banner.png" alt="catalog-banner">
                </div>
            </div>
            <!-- <div class="row-1">
                <div class="title-row">
                    <h2>Роли <img class="img-rolls-title" src="/Диплом/images/title-rolls.png" alt="rolls"><span
                            class="custom-number">01</span><img class="img-rolls-title"
                            src="/Диплом/images/title-rolls.png" alt="rolls">
                    </h2>
                </div>
            </div> -->
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
                    // Початок контейнера для кнопок
                    echo '<div class="button-container">';
                    
                    // Виведення кнопок для кожного запису з бази даних
                    while($row = $result->fetch_assoc()) {
                        // Якщо лічильник досягає 0, виводимо відкриття нового ряду
                        if ($count % 8 == 0) {
                            echo '<div class="button-row">';
                        }
                        
                        // Виведення кнопки
                        echo '<button id="' . htmlspecialchars($row["name_filter"]) . '" class="button-design ';
                        echo '">' . htmlspecialchars($row["name_filter"]) . '</button>';
                        
                        // Якщо лічильник досягає 7, виводимо закриття ряду
                        if ($count % 8 == 7) {
                            echo '</div>'; // Закриття ряду кнопок
                        }
                        
                        $count++; // Збільшення лічильника
                    }
                    
                    // Закриття контейнера для кнопок
                    echo '</div>';
                } else {
                    // echo "Не знайдено жодного фільтру";
                }
                $conn->close();
            ?>

            <div class="wrapper-rolls">
        <?php
            // Конфігурація для підключення до бази даних
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
                    // Виведення HTML-коду для кожного продукту
                    if ($counter % 3 == 0) {
                        echo '<div class="row-rolls">'; // Відкриваємо новий рядок кожні три об'єкти
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

                    // Виведення назв інгредієнтів, розділених комами
                    echo implode(", ", $ingredient_names);

                    echo '</p>';
                    echo '<div class="wrapper">';
                    echo '<button class="product-box-btn">Купити</button>';
                    echo '<p class="product-box-price"><span class="product-box-price-big">' . intval($row["price"]) . '</span><span class="currency">грн</span></p>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                    if (($counter + 1) % 3 == 0 || ($counter + 1) == $result->num_rows) {
                        echo '</div>'; // Закриваємо рядок після кожних трьох об'єктів або в кінці
                    }
                    $counter++;
                }
            } else {
                echo "0 results";
            }

            // Закриття з'єднання з базою даних
            $conn->close();
        ?>

                <!-- <a class="link-product-box" href="/Диплом/products.php">
                    <div class="product-box-rolls">
                            <img class="img-product-box" src="/Диплом/images/rolls-photo/vip-roll.png" alt="vip-roll">
                        <div class="text-product-box">
                            <h3>VIP рол</h3>
                            <p class="product-description"><span class="weight">335г</span> - Тунець, креветка, лосось, окунь, масаго, сир "Філа", авокадо, огірок, цибуля зелена, соус "Спайс"</p>
                            <div class="wrapper">
                                <button class="product-box-btn">Купити</button>
                                <p class="product-box-price"><span class="product-box-price-big">430</span><span class="currency">грн</span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="product-box-rolls">
                    <img class="img-product-box" src="/Диплом/images/rolls-photo/vip-roll-popkorn.png" alt="vip-roll-popkorn">
                    <div class="text-product-box">
                        <h3>VIP рол з "Ебі" попкорном</h3>
                        <p class="product-description"><span class="weight">340г</span> - Тунець, креветка, лосось, окунь, масаго, сир "Філа", соус "Манговий", огірок, авокадо, цибуля зелена, соус "Спайс"</p>
                        <div class="wrapper">
                            <button class="product-box-btn">Купити</button>
                            <p class="product-box-price"><span class="product-box-price-big">430</span><span class="currency">грн</span></p>
                        </div>
                    </div>
                </div>
                <div class="product-box-rolls">
                    <img class="img-product-box" src="/Диплом/images/rolls-photo/avokado-yasai-roll.png" alt="avokado-yasai-roll">
                    <div class="text-product-box">
                        <h3>Авокадо-Ясай рол</h3>
                        <p class="product-description"><span class="weight">320г</span> - Авокадо, сир "Філа", огірок, томати, морква парова, соус "Унагі", кунжут</p>
                        <div class="wrapper">
                            <button class="product-box-btn">Купити</button>
                            <p class="product-box-price"><span class="product-box-price-big">270</span><span class="currency">грн</span></p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <?php require 'footer.php'; ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
  const productBoxes = document.querySelectorAll(".link-product-box");

  productBoxes.forEach(function (box) {
    box.addEventListener("click", function () {
      const productId = this.getAttribute("data-product-id");
      
      // Отримати поточну категорію з URL
      const urlParams = new URLSearchParams(window.location.search);
      const currentCategory = urlParams.get('category');
      
      // Отримати обраний фільтр з URL
      const currentFilter = urlParams.get('filter');

      // Побудувати новий URL з параметрами категорії, фільтра та ідентифікатора продукту
      const url = `products.php?category=${currentCategory}&filter=${currentFilter}&product_id=${productId}`;
      
      // Перенаправити користувача на products.php з параметрами
      window.location.href = url;
    });
  });
});
</script>
<!-- <script>
    // Отримати значення з PHP та використати його у JavaScript
    const category = "<?php //echo $_GET['category']; ?>";

    document.addEventListener("DOMContentLoaded", function () {
        const buttons = document.querySelectorAll(".button-design");

        buttons.forEach(function (button) {
            button.addEventListener("click", function () {
                const filter = this.id; // Отримати id кнопки, яка була клікнута
                filterProducts(filter, category); // Викликати функцію фільтрації з параметрами фільтра і категорії
            });
        });
    });

    function filterProducts(filter, category) {
        // Відправити запит на сервер з параметрами фільтра та категорії
        window.location.href = `category.php?filter=${filter}&category=${category}`;
    }
</script> -->
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
            const filter = this.id; // Отримати id кнопки, яка була клікнута
            filterProducts(filter); // Викликати функцію фільтрації з параметром фільтра
        });
    });
});

function filterProducts(filter) {
    // Встановлення параметра фільтра в URL і перезавантаження сторінки
    window.location.href = `category.php?filter=${filter}&category=<?php echo $_GET['category']; ?>`;
}
</script>
</body>
</html>
