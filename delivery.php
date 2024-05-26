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
    <link rel="stylesheet" href="css/delivery.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="delivery-page">
            <header class="delivery-header">
                <h1>Доставка</h1>
                <p>Вартість доставки по районах та містах</p>
            </header>
            <section class="delivery-info">
                <p>Доставка 60 грн, але діє мінімальне замовлення для доставки.</p>
                <ul class="delivery-prices">
                    <li><span class="color-box green"></span>Зелений 400 грн</li>
                    <li><span class="color-box orange"></span>Помаранчевий 500 грн</li>
                    <li><span class="color-box blue"></span>Голубий 600 грн</li>
                    <li><span class="color-box pink"></span>Рожевий 700 грн</li>
                    <li><span class="color-box grey"></span>Сірий 900 грн</li>
                </ul>
            </section>
            <section class="delivery-map">
            <iframe src="https://www.google.com/maps/d/embed?mid=13QM24tXBEDnh8s_Wo_soza7avBzg8nLw&ehbc=2E312F" width="640" height="480"></iframe>
            </section>
        </div>
    </div>
    <?php require 'footer.php'; ?>
</body>
</html>