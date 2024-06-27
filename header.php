<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css?v=1.0">
    <title>Томаха</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body>
<header class="header">
    <div class="nav-bar">
        <div class="container">
            <div class="wrapper-nav-bar">
                <a href="index.php">
                    <img src="/Диплом/images/logo.png" alt="Logo" class="logo-nav-bar">
                </a>
                <ul class="menu">
                    <li class="menu-item">
                        <a href="about us.php" class="menu-link">Про нас</a>
                    </li>
                    <li class="menu-item">
                        <a href="restaurants.php" class="menu-link">Ресторани ТОМАХА</a>
                    </li>
                    <li class="menu-item">
                        <a href="delivery.php" class="menu-link">Доставка</a>
                    </li>
                    <li class="menu-item">
                        <a href="vacancies.php" class="menu-link">Вакансії</a>
                    </li>
                    <li class="menu-item">
                        <a href="contacts.php" class="menu-link">Контакти</a>
                    </li>
                </ul>
                <a class="phone-link" href="tel:380937807857"><img class="icon-phone" src="/Диплом/images/phone.svg"
                        alt="phone">+38
                    (093)-780-78-57</a>
                <a href="basket.php" class="btn-basket">
                    <svg fill="none" height="20" viewBox="0 0 18 20" width="18" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="m17 16.5851c0-.7481-1.1636-11.63632-1.1636-11.63632-.0199-.12945-.0865-.24713-.1873-.33076-.1008-.08364-.2287-.12742-.3596-.12305h-2.3273c-.0775-.98155-.5336-1.89452-1.2719-2.54596-.7383-.65143-1.70092-.990291-2.68448-.94495-.98478-.04549-1.94878.293-2.68894.94417s-1.19871 1.56418-1.27906 2.54674h-2.32727c-.1309-.00437-.25885.03941-.35964.12305-.10079.08363-.16742.20131-.18727.33076 0 0-1.163657 10.89592-1.16364 11.63632.00002.7405.45581 1.3659 1.01847 1.8155.56267.4497 1.26269.5933 1.99535.5933h10.03058c.6982 0 1.43-.1441 1.9908-.594.5608-.45.9648-1.0666.9648-1.8148zm-8.01745-14.61523c.71021-.03228 1.40505.2133 1.93725.68468s.8599 1.1315.9137 1.84042h-5.7135c.05374-.71103.38308-1.37294.91781-1.84463.53473-.4717 1.23257-.71587 1.94474-.68047zm5.01525 16.06983-10.03053-.0116c-1.04727 0-1.88509-.6168-1.90836-1.3848s1.10545-11.18252 1.10545-11.18252h1.85019v1.51273c.00298.06879.01951.13631.04863.1987.02911.0624.07025.11843.12105.16491s.11026.08248.17499.10594c.06473.02347.13345.03394.20223.03081.06973.00473.1397-.00456.20578-.0273s.12694-.05848.17899-.10511c.05206-.04663.09425-.10321.1241-.16641.02984-.06319.04673-.13172.04968-.20154v-1.51273h5.7135v1.51273c.0193.13281.0858.25422.1873.34202s.2312.13612.3654.13612.2639-.04832.3654-.13612.168-.20921.1873-.34202v-1.51273h1.8036s1.1637 10.35632 1.1637 11.15932c0 .8029-.8727 1.4196-1.9084 1.4196z"
                            fill="#fff" stroke="#fff" stroke-miterlimit="10" stroke-width=".3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <ul class="menu-navigation">
                <li class="menu-navigation-item">
                    <img class="img-navigation-link" src="/Диплом/images/menu-navigation/rolls.png" alt="rolls">
                    <span style="display: block;"><a class="link-navigation" href="category.php?category=rolls">Роли</a></span>
                </li>
                <li class="menu-navigation-item">
                    <img class="img-navigation-link" src="/Диплом/images/menu-navigation/kits.png" alt="kits">
                    <span style="display: block;"><a class="link-navigation" href="category.php?category=kits">Набори</a></span>
                </li>
                <li class="menu-navigation-item">
                    <img class="img-navigation-link" src="/Диплом/images/menu-navigation/sushi.png" alt="sushi">
                    <span style="display: block;"><a class="link-navigation" href="category.php?category=sushi">Суші</a></span>
                </li>
                <li class="menu-navigation-item">
                    <img class="img-navigation-link" src="/Диплом/images/menu-navigation/salads.png" alt="salads">
                    <span style="display: block;"><a class="link-navigation" href="category.php?category=salads">Салати</a></span>
                </li>
                <li class="menu-navigation-item">
                    <img class="img-navigation-link" src="/Диплом/images/menu-navigation/hot meals.png" alt="hot meals">
                    <span style="display: block;"><a class="link-navigation" href="category.php?category=hot meals">Гарячі страви</a></span>
                </li>
                <li class="menu-navigation-item">
                    <img class="img-navigation-link" src="/Диплом/images/menu-navigation/desserts.png" alt="desserts">
                    <span style="display: block;"><a class="link-navigation" href="category.php?category=desserts">Десерти</a></span>
                </li>
                <li class="menu-navigation-item">
                    <img class="img-navigation-link" src="/Диплом/images/menu-navigation/vegetarian.png" alt="vegetarian">
                    <span style="display: block;"><a class="link-navigation" href="category.php?category=vegetarian">Вегетаріанські</a></span>
                </li>
            </ul>
        </div>
    </div>
</header>