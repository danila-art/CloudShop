<?php
session_start();
require_once './php/db.php';
$products = select('SELECT * FROM goods');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Shop -- Главная</title>
    <link rel="stylesheet" href="./assets/css/main_stylesheet.css">
    <link rel="stylesheet" href="./assets/css/header_style.css">
</head>

<body>
    <?php require_once './modules/header.php'; ?>
    <div class="container">
        <? foreach ($products as $product) : ?>
            <div class="container__item">
                <img src="" alt="" srcset="">
                <div class="item__flex-container">
                    <div class="item__flex-1">
                        <h4 class="item__title"><?= ucfirst($product['title']) ?></h4>
                        <div class="container__item-desk">
                            <span><?= ucfirst($product['description']) ?></span>
                        </div>
                    </div>
                    <div class="item__flex-2">
                        <div class="container__item-rating"><span><?= $product['grade'] ?>⭐</span></div>

                        <div class="item__price">
                            <span>Цена: <b><?= ucfirst($product['price']) ?> руб.</b></h3>
                        </div>
                    </div>
                </div>
                <a href="./pages/product.php?id=<?=$product['id']?>">Подробнее</a>
            </div>
        <? endforeach ?>

    </div>
</body>

</html>