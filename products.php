<?php require 'header.php'; ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<?php 

    $product_id = $_GET['product_id'];

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "Tomaxa";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Запит для вибірки продуктів з таблиці Products
    $sql = "SELECT * FROM Products WHERE product_id = $product_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    // Отримання інгредієнтів для поточного продукту зі стовпця ingredients
    $category = $row["category"];
    $ingredient_ids_string = $row["ingredients"];

    // Розділення рядка на окремі значення ідентифікаторів
    $ingredient_ids = explode("#", $ingredient_ids_string);
    // Запит для вибірки інгредієнтів
    $ingredient_sql = "SELECT * FROM ingredients WHERE id_ingredients IN (" . implode(",", $ingredient_ids) . ")";
    $ingredient_result = $conn->query($ingredient_sql);

    echo '<section class="product-page">';
    echo '<div class="container">';
    echo '<div class="product-page-row">';
    echo '<div class="video-box">';
    // Перевірка розширення файлу
    $file_extension = pathinfo($row["video_path"], PATHINFO_EXTENSION);
    if ($file_extension === 'mp4') {
        echo '<video class="video-product" autoplay muted loop>';
        echo '<source src="' . $row["video_path"] . '" type="video/mp4">';
        echo '</video>';
    } else {
        echo '<img src="' . $row["video_path"] . '" alt="' . $row["title"] . '" class="video-product">';
    }
    echo '</div>';
    echo '<div class="content-product">';
    echo '<h2>' . $row["title"] . '</h2>';
    echo '<p>' . $row["weight"] . 'г</p>';
    echo '<div class="wrapper">';
    echo '<button class="content-product-btn" data-product-id="' . $row["product_id"] . '" data-product-title="' . $row["title"] . '" data-product-img="' . $row["img_path"] . '" data-product-price="' . intval($row["price"]) . '">Купити</button>';
    echo '<p class="content-product-price"><span class="content-product-price-big">' . intval($row["price"]) . '</span><span class="currency">грн</span></p>';
    echo '</div>';
    echo '<div class="ingredients-title">Склад:</div>';
    echo '<div class="ingredient-container">';

    while ($ingredient_row = $ingredient_result->fetch_assoc()) {
        echo '<div class="content-ingredient">';
        echo '<img src="' . $ingredient_row["img_path"] . '" alt="' . $ingredient_row["name"] . '">';
        echo '<div class="ingredient-description">' . $ingredient_row["name"] . '</div>';
        echo '</div>';
    }

    echo '</div>'; // ingredient-container
    echo '</div>'; // content-product
    echo '</div>'; // product-page-row
    echo '</div>'; // container
    echo '</section>'; // product-page

    // Виведення каруселі ролів
    echo '<section class="main-liked">';
    echo '<section class="product-carousel">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="title-row-liked">';
    echo '<h2>Вам може сподобатися</h2>';
    echo '</div>';
    echo '<div class="swiper-row-products">';
    echo '<svg class="slider-swiper-left img-swiper" fill="none" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">';
    echo '<circle id="circleL" class="circle-color" r="15" transform="matrix(-1 0 0 1 15 15)" />';
    echo '<path d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z" fill="#000" />';
    echo '</svg>';
    echo '<h3 class="number-page-swiper"><span class="change-number-swiper">1</span>/8</h3>';
    echo '<svg class="slider-swiper-right img-swiper" fill="none" height="30" viewBox="0 0 30 30" width="30" xmlns="http://www.w3.org/2000/svg">';
    echo '<circle id="circleR" class="circle-color active" r="15" transform="matrix(-1 0 0 1 15 15)" />';
    echo '<path d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z" fill="#000" />';
    echo '</svg>';
    echo '</div>'; // swiper-row
    echo '</div>';
    echo '<div class="swiper myswiper" style="height: 550px;">';
    echo '<div class="swiper-wrapper">';

    // Вибір випадкових 10 ролів
    $sql = "SELECT * FROM Products WHERE category = '$category' ORDER BY RAND() LIMIT 10";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="swiper-slide">';
            echo '<a class="link-product-box-liked" data-product-id="' . $row["product_id"] . '">';
            echo '<div class="product-box-products">';
            echo '<img class="img-product-box" src="' . $row["img_path"] . '" alt="' . $row["title"] . '">';
            echo '<div class="text-product-box">';
            echo '<h3>' . $row["title"] . '</h3>';
            echo '<p class="product-description"><span class="weight">' . $row["weight"] . 'г</span> - ';

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
            echo '<div class="wrapper">';
            echo '<button class="product-box-btn">Купити</button>';
            echo '<p class="product-box-price"><span class="product-box-price-big">' . intval($row["price"]) . '</span><span class="currency">грн</span></p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
            echo '</div>';
        }
    } else {
        echo "0 результатів";
    }

    echo '</div>'; // swiper-wrapper
    echo '</div>'; // swiper
    echo '</div>'; // container
    echo '</section>'; // product-carousel
    echo '</section>'; // main-liked

    $conn->close();

?>

<?php require 'footer.php'; ?>
<script src="js/main.js"></script>

<!-- // Фунція додавання товарів до кошика -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const addToCartButtons = document.querySelectorAll('.content-product-btn');

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
