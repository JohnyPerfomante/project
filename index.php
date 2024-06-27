<?php require 'header.php'; ?>
    <section class="main">
        <div class="swiper-big-new">
            <img src="/Диплом/images/swiper-big-new.png" alt="swiper-big-new">
        </div>
        <section class="product-carousel">
            <div class="container">
                <div class="row slider-1">
                    <div class="title-row">
                        <h2>Роли <img class="img-rolls-title" src="/Диплом/images/title-rolls.png" alt="rolls"><span
                                class="custom-number">01</span><img class="img-rolls-title"
                                src="/Диплом/images/title-rolls.png" alt="rolls">
                        </h2>
                    </div>
                    <div class="swiper-row">
                        <svg class="slider-swiper-left img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleL" class="circle-color" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <h3 class="number-page-swiper"><span class="change-number-swiper">1</span>/8</h3>
                        <svg class="slider-swiper-right img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleR" class="circle-color active" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <button class="slider-btn"><a href="category.php">Дивитися все</a></button>
                    </div>
                </div>
                <div class="swiper myswiper">
                    <div class="swiper-wrapper">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";
                            $dbname = "Tomaxa";
                        
                            $conn = new mysqli($servername, $username, $password, $dbname);
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Products WHERE category = 'rolls' ORDER BY RAND() LIMIT 10";
                            $result = $conn->query($sql);
                        
                            // Виведення результатів запиту
                            if ($result->num_rows > 0) {
                                // Виведення даних кожного рядка
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="swiper-slide">';
                                    echo '<a class="link-product-box-liked" data-product-id="' . $row["product_id"] . '">';
                                    echo '<div class="product-box-products">';
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
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="main">
        <section class="product-carousel">
            <div class="container">
                <div class="row slider-2">
                    <div class="title-row">
                        <h2>Суші <img class="img-rolls-title" src="/Диплом/images/title-sushi.png" alt="rolls"><span
                                class="custom-number">02</span><img class="img-rolls-title"
                                src="/Диплом/images/title-sushi.png" alt="rolls">
                        </h2>
                    </div>
                    <div class="swiper-row">
                        <svg class="slider-swiper-left img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleL" class="circle-color" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <h3 class="number-page-swiper"><span class="change-number-swiper">1</span>/8</h3>
                        <svg class="slider-swiper-right img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleR" class="circle-color active" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <button class="slider-btn"><a href="category.php?category=sushi">Дивитися все</a></button>
                    </div>
                </div>
                <div class="swiper myswiper">
                    <div class="swiper-wrapper">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";
                            $dbname = "Tomaxa";
                        
                            $conn = new mysqli($servername, $username, $password, $dbname);
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Products WHERE category = 'sushi' ORDER BY RAND() LIMIT 10";
                            $result = $conn->query($sql);
                        
                            // Виведення результатів запиту
                            if ($result->num_rows > 0) {
                                // Вивести дані кожного рядка
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="swiper-slide">';
                                    echo '<a class="link-product-box-liked" data-product-id="' . $row["product_id"] . '">';
                                    echo '<div class="product-box-products">';
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
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="main">
        <section class="product-carousel">
            <div class="container">
                <div class="row slider-3">
                    <div class="title-row">
                        <h2>Набори <img class="img-rolls-title" src="/Диплом/images/title-kits.png" alt="rolls"><span
                                class="custom-number">03</span><img class="img-rolls-title"
                                src="/Диплом/images/title-kits.png" alt="rolls">
                        </h2>
                    </div>
                    <div class="swiper-row">
                        <svg class="slider-swiper-left img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleL" class="circle-color" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <h3 class="number-page-swiper"><span class="change-number-swiper">1</span>/8</h3>
                        <svg class="slider-swiper-right img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleR" class="circle-color active" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <button class="slider-btn"><a href="category.php?category=kits">Дивитися все</a></button>
                    </div>
                </div>
                <div class="swiper myswiper">
                    <div class="swiper-wrapper">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";
                            $dbname = "Tomaxa";
                        
                            $conn = new mysqli($servername, $username, $password, $dbname);
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Products WHERE category = 'kits' ORDER BY RAND() LIMIT 10";
                            $result = $conn->query($sql);
                        
                            // Виведення результатів запиту
                            if ($result->num_rows > 0) {
                                // Вивести дані кожного рядка
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="swiper-slide">';
                                    echo '<a class="link-product-box-liked" data-product-id="' . $row["product_id"] . '">';
                                    echo '<div class="product-box-products">';
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
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="main">
        <section class="product-carousel">
            <div class="container">
                <div class="row slider-4">
                    <div class="title-row">
                        <h2>Салати <img class="img-rolls-title" src="/Диплом/images/title-salads.png" alt="rolls"><span
                                class="custom-number">04</span><img class="img-rolls-title"
                                src="/Диплом/images/title-salads.png" alt="rolls">
                        </h2>
                    </div>
                    <div class="swiper-row">
                        <svg class="slider-swiper-left img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleL" class="circle-color" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <h3 class="number-page-swiper"><span class="change-number-swiper">1</span>/2</h3>
                        <svg class="slider-swiper-right img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleR" class="circle-color active" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <button class="slider-btn"><a href="category.php?category=salads">Дивитися все</a></button>
                    </div>
                </div>
                <div class="swiper myswiper">
                    <div class="swiper-wrapper">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";
                            $dbname = "Tomaxa";
                        
                            $conn = new mysqli($servername, $username, $password, $dbname);
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Products WHERE category = 'salads' ORDER BY RAND() LIMIT 10";
                            $result = $conn->query($sql);
                        
                            // Виведення результатів запиту
                            if ($result->num_rows > 0) {
                                // Вивести дані кожного рядка
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="swiper-slide">';
                                    echo '<a class="link-product-box-liked" data-product-id="' . $row["product_id"] . '">';
                                    echo '<div class="product-box-products">';
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
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="main">
        <section class="product-carousel">
            <div class="container">
                <div class="row slider-5">
                    <div class="title-row">
                        <h2>Гарячі страви <img class="img-rolls-title" src="/Диплом/images/title-hot meals.png" alt="rolls"><span
                                class="custom-number">05</span><img class="img-rolls-title"
                                src="/Диплом/images/title-hot meals.png" alt="rolls">
                        </h2>
                    </div>
                    <div class="swiper-row">
                        <svg class="slider-swiper-left img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleL" class="circle-color" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <h3 class="number-page-swiper"><span class="change-number-swiper">1</span>/8</h3>
                        <svg class="slider-swiper-right img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleR" class="circle-color active" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <button class="slider-btn"><a href="category.php?category=hot meals">Дивитися все</a></button>
                    </div>
                </div>
                <div class="swiper myswiper">
                    <div class="swiper-wrapper">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";
                            $dbname = "Tomaxa";
                        
                            $conn = new mysqli($servername, $username, $password, $dbname);
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Products WHERE category = 'hot meals' ORDER BY RAND() LIMIT 10";
                            $result = $conn->query($sql);
                        
                            // Виведення результатів запиту
                            if ($result->num_rows > 0) {
                                // Вивести дані кожного рядка
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="swiper-slide">';
                                    echo '<a class="link-product-box-liked" data-product-id="' . $row["product_id"] . '">';
                                    echo '<div class="product-box-products">';
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
                    </div>
                </div>
            </div>
        </section>
    </section>
    <section class="main">
        <section class="product-carousel">
            <div class="container">
                <div class="row slider-6">
                    <div class="title-row">
                        <h2>Вегетаріанські <img class="img-rolls-title" src="/Диплом/images/title-vegetarian.png" alt="rolls"><span
                                class="custom-number">06</span><img class="img-rolls-title"
                                src="/Диплом/images/title-vegetarian.png" alt="rolls">
                        </h2>
                    </div>
                    <div class="swiper-row">
                        <svg class="slider-swiper-left img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleL" class="circle-color" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <h3 class="number-page-swiper"><span class="change-number-swiper">1</span>/8</h3>
                        <svg class="slider-swiper-right img-swiper" fill="none" height="30" viewBox="0 0 30 30"
                            width="30" xmlns="http://www.w3.org/2000/svg">
                            <circle id="circleR" class="circle-color active" r="15" transform="matrix(-1 0 0 1 15 15)" />
                            <path
                                d="m10.0831 14.4147 6.6752-6.67507c.1544-.15451.3605-.23963.5803-.23963.2197 0 .4258.08512.5802.23963l.4916.49146c.3199.32024.3199.84073 0 1.16048l-5.6053 5.60533 5.6115 5.6115c.1544.1545.2396.3605.2396.5801 0 .2199-.0852.4259-.2396.5805l-.4916.4914c-.1545.1545-.3604.2396-.5802.2396s-.4259-.0851-.5802-.2396l-6.6815-6.6812c-.15471-.155-.2397-.3619-.23922-.5819-.00048-.2209.08451-.4277.23922-.5826z"
                                fill="#000" />
                        </svg>
                        <button class="slider-btn"><a href="category.php?category=vegetarian">Дивитися все</a></button>
                    </div>
                </div>
                <div class="swiper myswiper">
                    <div class="swiper-wrapper">
                        <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "root";
                            $dbname = "Tomaxa";
                        
                            $conn = new mysqli($servername, $username, $password, $dbname);
                        
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Products WHERE category = 'vegetarian' ORDER BY RAND() LIMIT 10";
                            $result = $conn->query($sql);
                        
                            // Виведення результатів запиту
                            if ($result->num_rows > 0) {
                                // Вивести дані кожного рядка
                                while($row = $result->fetch_assoc()) {
                                    echo '<div class="swiper-slide">';
                                    echo '<a class="link-product-box-liked" data-product-id="' . $row["product_id"] . '">';
                                    echo '<div class="product-box-products">';
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
                    </div>
                </div>
            </div>
        </section>
    </section>

    <?php require 'footer.php'; ?>

    <script src="js/main.js"></script>

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