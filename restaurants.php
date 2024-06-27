<?php require 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/restaurants.css">
    <title>Restaurants</title>
</head>
<body>
<main>
    <section class="restaurants">
        <div class="container">
        <h1 class="title">Ресторани TOMAXA</h1>
            <div class="restaurant-list">

                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "root";
                    $dbname = "Tomaxa";
                    
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    
                    $sql = "SELECT restaurant_id, title, place, img_path FROM restaurants";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        echo '<div class="restaurant-list">';
                        while($row = $result->fetch_assoc()) {
                            echo '
                            <div class="restaurant-item">
                                <img src="'.$row["img_path"].'" alt="'.$row["title"].'" class="restaurant-image">
                                <div class="restaurant-info">
                                    <h2><span class="highlight">ТОМАХА</span>'.$row["title"].'</span></h2>
                                    <p>'.$row["place"].'</p>
                                </div>
                            </div>';
                        }
                        echo '</div>';
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </div>
        </div>
    </section>
</main>
<?php require 'footer.php'; ?>
</body>
</html>