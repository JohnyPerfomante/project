-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Июн 08 2024 г., 11:29
-- Версия сервера: 5.7.39
-- Версия PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Tomaxa`
--

-- --------------------------------------------------------

--
-- Структура таблицы `filters`
--

CREATE TABLE `filters` (
  `id_filter` int(11) NOT NULL,
  `name_filter` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `filters`
--

INSERT INTO `filters` (`id_filter`, `name_filter`, `category`) VALUES
(1, 'Fit roll', 'Rolls'),
(2, 'Гриль роли', 'Rolls'),
(3, 'Спайс роли', 'Rolls'),
(4, 'Філадельфія', 'Rolls'),
(5, 'Макі', 'Rolls'),
(6, 'Гарячі', 'Rolls'),
(7, 'Вугор', 'Rolls'),
(8, 'Теплі роли', 'Rolls'),
(9, 'Дракони', 'Rolls'),
(10, 'Для вегетаріанців', 'Rolls'),
(11, 'Лосось', 'Rolls'),
(12, 'Футомакі', 'Rolls'),
(13, 'Фірмові', 'Rolls'),
(14, 'Інарі', 'Rolls'),
(15, 'Бейбі роли', 'Rolls'),
(16, 'Філадельфія', 'Kits'),
(17, 'Макі', 'Kits'),
(18, 'Гарячі', 'Kits'),
(19, 'Нігірі', 'Kits'),
(20, 'Вугор', 'Kits'),
(21, 'Теплі роли', 'Kits'),
(22, 'Каліфорнія', 'Kits'),
(23, 'Лосось', 'Kits'),
(24, 'Футомакі', 'Kits'),
(25, 'Інарі', 'Kits'),
(26, 'Гарячі', 'Sushi'),
(27, 'Нігірі', 'Sushi'),
(28, 'Гункани', 'Sushi'),
(29, 'Вугор', 'Sushi'),
(30, 'Теплі роли', 'Sushi'),
(31, 'Лосось', 'Sushi'),
(32, 'Інарі', 'Sushi'),
(33, 'Вугор', 'Salads'),
(34, 'Лосось', 'Salads'),
(35, 'Гриль роли', 'Hot meals'),
(36, 'Філадельфія', 'Hot meals'),
(37, 'Гарячі', 'Hot meals'),
(38, 'Супи', 'Hot meals'),
(39, 'Вугор', 'Hot meals'),
(40, 'Теплі роли', 'Hot meals'),
(41, 'Для вегетаріанців', 'Hot meals'),
(42, 'Лосось', 'Hot meals'),
(43, 'Фірмові', 'Hot meals'),
(44, 'Інарі', 'Hot meals'),
(45, 'Для вегетаріанців', 'Desserts'),
(46, 'Фірмові', 'Desserts'),
(47, 'Макі', 'Vegetarian'),
(48, 'Гарячі', 'Vegetarian'),
(49, 'Нігірі', 'Vegetarian'),
(50, 'Теплі роли', 'Vegetarian'),
(51, 'Для вегетаріанців', 'Vegetarian'),
(52, 'Фірмові', 'Vegetarian'),
(53, 'Бейбі роли', 'Vegetarian');

-- --------------------------------------------------------

--
-- Структура таблицы `ingredients`
--

CREATE TABLE `ingredients` (
  `id_ingredients` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `ingredients`
--

INSERT INTO `ingredients` (`id_ingredients`, `name`, `img_path`) VALUES
(1, 'Авокадо', '/Диплом/images/ingredients/avokado.png'),
(2, 'Сир \"Філа\"', '/Диплом/images/ingredients/fila.png'),
(3, 'Креветка \"Фрі\"', '/Диплом/images/ingredients/krevetka-fri.png'),
(4, 'Креветка', '/Диплом/images/ingredients/krevetki.png'),
(5, 'Кунжут', '/Диплом/images/ingredients/kungut.png'),
(6, 'Лосось', '/Диплом/images/ingredients/losos.png'),
(7, 'Цибуля зелена', '/Диплом/images/ingredients/luk-zelenuy.png'),
(8, 'Манго соус', '/Диплом/images/ingredients/mango-sous.png'),
(9, 'Манго', '/Диплом/images/ingredients/mango.png'),
(10, 'Масаго', '/Диплом/images/ingredients/masaga.png'),
(11, 'Морква', '/Диплом/images/ingredients/morkva.png'),
(12, 'Огірок', '/Диплом/images/ingredients/ogurec.png'),
(13, 'Окунь', '/Диплом/images/ingredients/okun.png'),
(14, 'Спайс соус', '/Диплом/images/ingredients/spice-sous.png'),
(15, 'Томат', '/Диплом/images/ingredients/tomatu.png'),
(16, 'Тунець', '/Диплом/images/ingredients/tunez.png'),
(17, 'Унагі соус', '/Диплом/images/ingredients/unagi-sous.png'),
(18, 'Вугор', '/Диплом/images/ingredients/ugor.png'),
(19, 'Японський майонез', '/Диплом/images/ingredients/yaponskiy-mayonez.png'),
(20, 'Рис', '/Диплом/images/ingredients/rise.png'),
(21, 'Сир \"Гауда\"', '/Диплом/images/ingredients/cheese-gauda.png'),
(22, 'Смажений лосось', '/Диплом/images/ingredients/smajeniy-losos.png'),
(23, 'Мідії', '/Диплом/images/ingredients/midii.png'),
(24, 'Стружка тунця', '/Диплом/images/ingredients/strujka-tunez.png'),
(25, 'Курка фрі', '/Диплом/images/ingredients/kurka-fri.png'),
(26, 'Червона ікра', '/Диплом/images/ingredients/ikra.png'),
(27, 'Сніжний краб', '/Диплом/images/ingredients/snijniy-krab.png'),
(28, 'Бекон', '/Диплом/images/ingredients/bekon.png'),
(29, 'Норі', '/Диплом/images/ingredients/nori.png'),
(30, 'Копчений лосось', '/Диплом/images/ingredients/kopcheniy-losos.png'),
(31, 'Салат \"Айсберг\"', '/Диплом/images/ingredients/aisberg.png'),
(32, 'Гребінець', '/Диплом/images/ingredients/grebinec.png'),
(33, 'Інарі', '/Диплом/images/ingredients/inari.png'),
(34, 'Цибуля ріпчаста', '/Диплом/images/ingredients/cibula-ripchasta.png'),
(35, 'Сир \"Пармезан\"', '/Диплом/images/ingredients/parmezan.png'),
(36, 'Курка \"Фрі\" з сиром', '/Диплом/images/ingredients/fri-cheese.png'),
(37, 'Базилік', '/Диплом/images/ingredients/bazilik.png'),
(38, 'Сир \"Вершковий\"', '/Диплом/images/ingredients/cheese-vershkoviy.png'),
(39, 'Яйце', '/Диплом/images/ingredients/egg.png'),
(40, 'Чука', '/Диплом/images/ingredients/chuka.png'),
(41, 'Горіховий соус', '/Диплом/images/ingredients/gorihoviy-sous.png'),
(42, 'Лимон', '/Диплом/images/ingredients/lemon.png'),
(43, 'Сир \"Моцарела\"', '/Диплом/images/ingredients/mozarela.png'),
(44, 'Локшина \"Фунчоза\"', '/Диплом/images/ingredients/lokshina-funchoza.png'),
(45, 'Локшина \"Удон\"', '/Диплом/images/ingredients/lokshina-udon.png'),
(46, 'Соєвий соус', '/Диплом/images/ingredients/soeviy-sous.png'),
(47, 'Копчена курка', '/Диплом/images/ingredients/kopchena-kurka.png'),
(48, 'Болгарський перець', '/Диплом/images/ingredients/bolgarskiy-perec.png'),
(49, 'Вакаме', '/Диплом/images/ingredients/vakame.png'),
(50, 'Паста \"Місо\"', '/Диплом/images/ingredients/miso-pasta.png'),
(51, 'Часник', '/Диплом/images/ingredients/garlik.png'),
(52, 'Сир \"Тофу\"', '/Диплом/images/ingredients/tofu.png'),
(53, 'Кокосово-вершковий соус', '/Диплом/images/ingredients/kokosovo-vershkoviy-sous.png'),
(54, 'Печериці', '/Диплом/images/ingredients/pechericy.png'),
(55, 'Цибуля \"Порей\"', '/Диплом/images/ingredients/luk-porey.png'),
(56, 'Кокосовий крем', '/Диплом/images/ingredients/kokos-krem.png'),
(57, 'Сиркова маса', '/Диплом/images/ingredients/sirkova-masa.png'),
(58, 'Млинець', '/Диплом/images/ingredients/mlynec.png'),
(59, 'Банан', '/Диплом/images/ingredients/banan.png'),
(60, 'Філадельфія зі смаженим лососем в кунжуті', '/Диплом/images/ingredients/filadelfiya-garenuy-losos-v-kungute.png'),
(61, 'Філадельфія з лососем', '/Диплом/images/ingredients/filadelfiya-losos.png'),
(62, 'Філадельфія у стружці тунця', '/Диплом/images/ingredients/filadelfiya-v-strugke-tunza.png'),
(63, 'Каппа', '/Диплом/images/ingredients/kappa.png'),
(64, 'Бука', '/Диплом/images/ingredients/buka.png'),
(65, 'Філадельфія у беконі', '/Диплом/images/ingredients/fila-v-bekone-new.png'),
(66, 'Кіото', '/Диплом/images/ingredients/kioto.png'),
(67, 'Запечений інарі з лососем в ікрі', '/Диплом/images/ingredients/zapechonuy-inari-losos.png'),
(68, 'Запечений інарі з мідіями', '/Диплом/images/ingredients/zapechonuy-inari-midii.png'),
(69, 'Запечений інарі з вугрем', '/Диплом/images/ingredients/zapechonuy-inari-vugor.png'),
(70, 'Філа рол', '/Диплом/images/ingredients/fila-roll.png'),
(71, 'Філадельфія з вугрем в ікрі', '/Диплом/images/ingredients/fila-ugor-v-ikre.png'),
(72, 'Філадельфія з вугрем в кунжуті', '/Диплом/images/ingredients/filadelfiya-ugor-v-kungute.png'),
(73, 'Філадельфія з вугрем', '/Диплом/images/ingredients/filadelfiya-ugor.png'),
(74, 'Рол \"Два сира \"', '/Диплом/images/ingredients/roll-2-sira.png'),
(75, 'Тунець темпура', '/Диплом/images/ingredients/tunez-tempura.png'),
(76, 'Запечений рол зі сніжним крабом', '/Диплом/images/ingredients/zapecenui-roll-zi-snegnui-krab.png'),
(77, 'Бронзовий дракон', '/Диплом/images/ingredients/bronza-drakon.png'),
(78, 'Чорний дракон', '/Диплом/images/ingredients/chornuy-drakon.png'),
(79, 'Філадельфія зі смаженим лососем в ікрі', '/Диплом/images/ingredients/fila-losos-v-ikre.png'),
(80, 'Філадельфія в кунжуті з лососем', '/Диплом/images/ingredients/filadelfiya-losos-v-kungute.png'),
(81, 'Вогненний дракон', '/Диплом/images/ingredients/ognenuy-drakon.png'),
(82, 'Червоний дракон', '/Диплом/images/ingredients/red-drakon.png'),
(83, 'Дракон жовтий', '/Диплом/images/ingredients/yellow-drakon.png'),
(84, 'Зелений дракон', '/Диплом/images/ingredients/zelenuy-drakon.png'),
(85, 'Каліфорнія смажений лосось', '/Диплом/images/ingredients/california-smajeniy-losos.png'),
(86, 'Філа кунсей у беконі', '/Диплом/images/ingredients/fila-kunsey-v-bekone.png'),
(87, 'Футомакі Делюкс', '/Диплом/images/ingredients/futomaki-deluks.png'),
(88, 'Унагі каппа-рол', '/Диплом/images/ingredients/unagi-kappa-roll.png'),
(89, 'Боніто', '/Диплом/images/ingredients/bonito.png'),
(90, 'Філадельфія з креветкою фрі в ікрі', '/Диплом/images/ingredients/fila-krevetka-kranch-v-ikre.png'),
(91, 'Сакура з креветкою', '/Диплом/images/ingredients/sakura-krevetka.png'),
(92, 'Філадельфія з тунцем в ікрі', '/Диплом/images/ingredients/fila-tunec-v-ikre.png'),
(93, 'Морквяна Філадельфія з лососем', '/Диплом/images/ingredients/morkva-filadelfiya-s-lososem.png'),
(94, 'Сенсей сніжний краб', '/Диплом/images/ingredients/sensey-snijniy-krab.png'),
(95, 'Унагі спайс рол в кунжуті', '/Диплом/images/ingredients/unagi-spays-v-kungute.png'),
(96, 'Спайс сніжний краб', '/Диплом/images/ingredients/spays-snegniy-krab-v-ikre.png'),
(97, 'Хатате рол в ікрі', '/Диплом/images/ingredients/xatate-roll-v-ikre.png'),
(98, 'Макі Лосось', '/Диплом/images/ingredients/maki-losos.png'),
(99, 'Нігірі Лосось', '/Диплом/images/ingredients/nigiri-losos.png'),
(100, 'Нігірі Вугор', '/Диплом/images/ingredients/nigiri-ugor.png'),
(101, 'Спайс лосось рол в кунжуті', '/Диплом/images/ingredients/spays-losos-v-kungute.png'),
(102, 'Макі Огірок', '/Диплом/images/ingredients/maki-ogurez.png'),
(103, 'Макі Тунець', '/Диплом/images/ingredients/maki-tunez.png'),
(104, 'Макі Вугор', '/Диплом/images/ingredients/maki-ugor.png');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `count` varchar(100) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `Products`
--

CREATE TABLE `Products` (
  `product_id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `filters` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `weight` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `img_path` varchar(100) NOT NULL,
  `video_path` varchar(100) NOT NULL,
  `ingredients` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `Products`
--

INSERT INTO `Products` (`product_id`, `category`, `filters`, `title`, `weight`, `price`, `img_path`, `video_path`, `ingredients`) VALUES
(1, 'Rolls', 'Fit Roll', 'Fit roll з манго та креветкою \"Фрі\"', 240, '350.00', '/Диплом/images/rolls-photo/fit-roll-mango-krevetka-fri.png', '/Диплом/videos/rolls/fit-roll-mango-krevetka-fri.mp4', '3#9#1#12#31#15#2#17'),
(2, 'Rolls', 'Fit Roll#Вугор#Лосось', 'Авокадо Люкс рол', 240, '380.00', '/Диплом/images/rolls-photo/avokado-luks-roll.png', '/Диплом/videos/rolls/avokado-luks-roll.mp4', '18#16#6#27#4#1#2'),
(3, 'Rolls', 'Fit Roll#Філадельфія#Вугор#Лосось#Фірмові', 'Люкс рол', 190, '350.00', '/Диплом/images/rolls-photo/luks-roll.png', '/Диплом/videos/rolls/luks-roll.mp4', '18#4#16#6#27#1#2'),
(4, 'Rolls', 'Fit Roll#Лосось', 'Сяке фреш рол', 245, '380.00', '/Диплом/images/rolls-photo/syake-fresh-roll.png', '/Диплом/videos/rolls/syake-fresh-roll.mp4', '6#27#1#12#31#2'),
(5, 'Rolls', 'Гриль роли#Гарячі#Вугор#Теплі роли', 'Гриль рол з вугрем', 320, '465.00', '/Диплом/images/rolls-photo/gril-roll-ugor.png', '/Диплом/videos/rolls/gril-roll-ugor.mp4', '18#3#1#9#2'),
(6, 'Rolls', 'Гриль роли#Гарячі#Теплі роли#Лосось', 'Гриль рол з лососем', 320, '420.00', '/Диплом/images/rolls-photo/gril-roll-losos.png', '/Диплом/videos/rolls/gril-roll-losos.mp4', '6#3#1#9#2'),
(7, 'Rolls', 'Гриль роли#Гарячі#Теплі роли', 'Запечений рол з креветкою кранч', 350, '370.00', '/Диплом/images/rolls-photo/zapecenui-roll-z-krewetka-kranch.png', '/Диплом/videos/rolls/zapecenui-roll-z-krewetka-kranch.mp4', '3#2#14#21#12#19'),
(8, 'Rolls', 'Гриль роли#Гарячі#Теплі роли', 'Запечений рол з куркою кранч', 350, '280.00', '/Диплом/images/rolls-photo/zapecenui-roll-z-kuricoy-kranch.png', '/Диплом/videos/rolls/zapecenui-roll-z-kuricoy-kranch.mp4', '25#2#14#21#12#19#24'),
(9, 'Rolls', 'Гриль роли#Філадельфія#Теплі роли#Лосось', 'Філа кунсей в беконі (гриль рол)', 310, '270.00', '/Диплом/images/rolls-photo/fila-kunsey-v-bekone.png', '/Диплом/videos/rolls/fila-kunsey-v-bekone.mp4', '2#30#7#12#15#28'),
(10, 'Rolls', 'Гриль роли#Філадельфія#Теплі роли', 'Філадельфія у беконі (гриль рол)', 280, '230.00', '/Диплом/images/rolls-photo/fila-v-bekone-new.png', '/Диплом/videos/rolls/fila-v-bekone-new.mp4', '28#2#17#12#15#29#20'),
(11, 'Rolls', 'Спайс роли', 'Спайс тунець в кунжуті', 280, '320.00', '/Диплом/images/rolls-photo/spais-tunez-v-kungutee.png', '/Диплом/videos/rolls/spais-tunez-v-kungutee.mp4', '16#12#10#1#2#14#34#5'),
(12, 'Rolls', 'Спайс роли#Фірмові', 'Хатате рол в ікрі', 300, '340.00', '/Диплом/images/rolls-photo/xatate-roll-v-ikre.png', '/Диплом/videos/rolls/xatate-roll-v-ikre.mp4', '32#12#1#10#2#7#14'),
(13, 'Rolls', 'Спайс роли#Лосось#Фірмові', 'Спайс лосось в ікрі', 300, '330.00', '/Диплом/images/rolls-photo/spays-losos-v-ikre.png', '/Диплом/videos/rolls/spays-losos-v-ikre.mp4', '6#10#12#1#2#14'),
(14, 'Rolls', 'Спайс роли#Лосось#Фірмові', 'Спайс лосось в кунжуті', 280, '285.00', '/Диплом/images/rolls-photo/spays-losos-v-kungute.png', '/Диплом/videos/rolls/spays-losos-v-kungute.mp4', '6#10#14#2#12#1#5'),
(15, 'Rolls', 'Спайс роли#Фірмові', 'Спайс сніжний краб в ікрі', 300, '300.00', '/Диплом/images/rolls-photo/spays-snegniy-krab-v-ikre.png', '/Диплом/videos/rolls/spays-snegniy-krab-v-ikre.mp4', '27#10#12#1#2#14'),
(16, 'Rolls', 'Спайс роли#Вугор#Фірмові', 'Унагі спайс рол в кунжуті', 280, '330.00', '/Диплом/images/rolls-photo/unagi-spays-v-kungute.png', '/Диплом/videos/rolls/unagi-spays-v-kungute.mp4', '18#12#2#14#5'),
(35, 'Rolls', 'Філадельфія#Лосось#Фірмові', 'VIP рол', 335, '430.00', '/Диплом/images/rolls-photo/vip-roll.png', '/Диплом/videos/rolls/vip-roll.mp4', '16#6#13#4#1#12#7#2#10#14'),
(38, 'Rolls', 'Філадельфія#Лосось#Фірмові', 'VIP рол з \"Ебі\" попкорном', 340, '430.00', '/Диплом/images/rolls-photo/vip-roll-popkorn.png', '/Диплом/videos/rolls/vip-roll-popkorn.mp4', '6#4#13#16#10#12#1#7#8#2#14'),
(39, 'Rolls', 'Філадельфія#Для вегетаріанців', 'Авокадо-Ясай рол', 320, '270.00', '/Диплом/images/rolls-photo/avokado-yasai-roll.png', '/Диплом/videos/rolls/avokado-yasai-roll.mp4', '5#17#2#15#11#12#1'),
(40, 'Rolls', 'Філадельфія#Лосось', 'Морквяна Філадельфія з лососем', 285, '270.00', '/Диплом/images/rolls-photo/morkva-filadelfiya-s-lososem.png', '/Диплом/videos/rolls/morkva-filadelfiya-s-lososem.mp4', '6#1#11#2'),
(41, 'Rolls', 'Філадельфія#Фірмові', 'Рол ЗСУ', 270, '300.00', '/Диплом/images/rolls-photo/zsu-roll.png', '/Диплом/videos/rolls/zsu-roll.mp4', '4#2#11#7'),
(42, 'Rolls', 'Філадельфія#Вугор', 'Унагі під стружкою', 300, '390.00', '/Диплом/images/rolls-photo/unagi-pod-strugkoi.png', '/Диплом/videos/rolls/unagi-pod-strugkoi.png', '17#24#18#2#1'),
(44, 'Rolls', 'Філадельфія#Вугор', 'Філадельфія з вугрем в ікрі', 270, '370.00', '/Диплом/images/rolls-photo/fila-ugor-v-ikre.png', '/Диплом/videos/rolls/fila-ugor-v-ikre.mp4', '10#1#2#18'),
(45, 'Rolls', 'Філадельфія#Лосось', 'Філадельфія з лососем в ікрі', 270, '340.00', '/Диплом/images/rolls-photo/fila-losos-v-ikre.png', '/Диплом/videos/rolls/fila-losos-v-ikre.mp4', '6#2#1#10'),
(46, 'Rolls', 'Філадельфія#Лосось', 'Філадельфія з лососем Махі', 330, '420.00', '/Диплом/images/rolls-photo/filadelfiya-losos-maxi.png', '/Диплом/videos/rolls/filadelfiya-losos-maxi.mp4', '2#20#6#12'),
(47, 'Rolls', 'Філадельфія', 'Філадельфія з тунцем в ікрі', 270, '330.00', '/Диплом/images/rolls-photo/fila-tunec-v-ikre.png', '/Диплом/videos/rolls/fila-tunec-v-ikre.mp4', '16#2#1#10'),
(50, 'Rolls', 'Філадельфія', 'Авокадо-манго рол', 310, '280.00', '/Диплом/images/rolls-photo/avokado-mango-roll.png', '/Диплом/videos/rolls/avokado-mango-roll.mp4', '9#5#17#1#2#27'),
(51, 'Rolls', 'Філадельфія#Лосось', 'Філадельфія лосось', 285, '365.00', '/Диплом/images/rolls-photo/filadelfiya-losos.png', '/Диплом/videos/rolls/filadelfiya-losos.mp4', '20#29#1#6#12#2'),
(52, 'Rolls', 'Філадельфія#Вугор#Фірмові', 'Сакура з креветкою', 280, '400.00', '/Диплом/images/rolls-photo/sakura-krevetka.png', '/Диплом/videos/rolls/sakura-krevetka.mp4', '2#29#17#4#10#5#18#20'),
(53, 'Rolls', 'Філадельфія#Вугор#Фірмові', 'Сакура з гребінцем', 285, '400.00', '/Диплом/images/rolls-photo/sakura-grebeshok.png', '/Диплом/videos/rolls/sakura-grebeshok.mp4', '2#26#32#5#18#29#20#17'),
(54, 'Rolls', 'Філадельфія', 'Філадельфія з креветкою кранч в ікрі', 270, '370.00', '/Диплом/images/rolls-photo/fila-krevetka-kranch-v-ikre.png', '/Диплом/videos/rolls/fila-krevetka-kranch-v-ikre.mp4', '3#2#1#10'),
(55, 'Rolls', 'Філадельфія#Вугор', 'Філадельфія вугор', 280, '375.00', '/Диплом/images/rolls-photo/filadelfiya-ugor.png', '/Диплом/videos/rolls/filadelfiya-ugor.mp4', '12#1#17#18#2#5'),
(56, 'Rolls', 'Філадельфія#Лосось#Фірмові', 'Томаха Sunrise з гребінцем', 315, '420.00', '/Диплом/images/rolls-photo/tomaxa-sunrise-grebechok.png', '/Диплом/videos/rolls/tomaxa-sunrise-grebechok.mp4', '32#29#26#16#2#1#6#20'),
(57, 'Rolls', 'Філадельфія#Лосось#Фірмові', 'Томаха Sunrise з креветкою', 310, '420.00', '/Диплом/images/rolls-photo/tomaxa-sunrise-krevetka.png', '/Диплом/videos/rolls/tomaxa-sunrise-krevetka.mp4', '10#29#6#4#2#1#20#16'),
(58, 'Rolls', 'Філадельфія#Лосось#Фірмові', 'Томаха з гребінцем', 295, '380.00', '/Диплом/images/rolls-photo/tomaxa-grebeshok.png', '/Диплом/videos/rolls/tomaxa-grebeshok.mp4', '32#26#6#2#29#20'),
(59, 'Rolls', 'Філадельфія#Лосось#Фірмові', 'Томаха з креветкою', 290, '380.00', '/Диплом/images/rolls-photo/tomaxa-krevetka.png', '/Диплом/videos/rolls/tomaxa-krevetka.mp4', '2#6#4#10#29#20'),
(60, 'Rolls', 'Філадельфія#Лосось', 'Торнадо', 330, '360.00', '/Диплом/images/rolls-photo/tornado.png', '/Диплом/videos/rolls/tornado.mp4', '2#29#20#17#15#6#36#12'),
(61, 'Rolls', 'Філадельфія#Вугор', 'Унагі манго рол', 310, '375.00', '/Диплом/images/rolls-photo/unagi-mango-roll.png', '/Диплом/videos/rolls/unagi-mango-roll.mp4', '17#1#2#18#5#27#9'),
(62, 'Rolls', 'Філадельфія#Вугор', 'Унагі-каппа рол', 270, '285.00', '/Диплом/images/rolls-photo/unagi-kappa-roll.png', '/Диплом/videos/rolls/unagi-kappa-roll.mp4', '12#1#17#18#5#2'),
(63, 'Rolls', 'Філадельфія#Вугор#Лосось', 'Уромакі Делюкс', 325, '420.00', '/Диплом/images/rolls-photo/uromaki-de-luks.png', '/Диплом/videos/rolls/uromaki-de-luks.mp4', '1#12#18#6#2'),
(64, 'Rolls', 'Філадельфія#Вугор#Лосось', 'Філадельфія MIX з вугрем та лососем', 285, '370.00', '/Диплом/images/rolls-photo/filadelfiya-miks-ugor-losos.png', '/Диплом/videos/rolls/filadelfiya-miks-ugor-losos.mp4', '6#2#17#12#5#18#1'),
(65, 'Rolls', 'Філадельфія#Вугор', 'Філадельфія в кунжуті з вугрем', 255, '310.00', '/Диплом/images/rolls-photo/filadelfiya-ugor-v-kungute.png', '/Диплом/videos/rolls/filadelfiya-ugor-v-kungute.mp4', '2#5#1#17#18#12#29#20'),
(66, 'Rolls', 'Філадельфія#Лосось', 'Філадельфія в кунжуті з лососем', 255, '295.00', '/Диплом/images/rolls-photo/filadelfiya-losos-v-kungute.png', '/Диплом/videos/rolls/filadelfiya-losos-v-kungute.mp4', '29#5#2#6#1#20#12'),
(67, 'Rolls', 'Філадельфія', 'Філадельфія в стружці тунця', 225, '270.00', '/Диплом/images/rolls-photo/filadelfiya-v-strugke-tunza.png', '/Диплом/videos/rolls/filadelfiya-v-strugke-tunza.mp4', '24#29#2#20#10#32#7'),
(68, 'Rolls', 'Філадельфія', 'Філадельфія зі смаженим лососем', 265, '280.00', '/Диплом/images/rolls-photo/filadelfiya-garenuy-losos-v-kungute.png', '/Диплом/videos/rolls/filadelfiya-garenuy-losos-v-kungute.mp4', '22#2#20#7#12#5#29'),
(69, 'Rolls', 'Філадельфія#Лосось', 'Боніто', 250, '300.00', '/Диплом/images/rolls-photo/bonito.png', '/Диплом/videos/rolls/bonito.mp4', '2#20#7#24#13#29#16#6'),
(70, 'Rolls', 'Філадельфія#Вугор', 'Бука', 260, '250.00', '/Диплом/images/rolls-photo/buka.png', '/Диплом/videos/rolls/buka.mp4', '1#17#2#29#20#1#18'),
(71, 'Rolls', 'Філадельфія#Лосось', 'Каппа', 270, '270.00', '/Диплом/images/rolls-photo/kappa.png', '/Диплом/videos/rolls/kappa.mp4', '20#12#2#29#5#6#1#17'),
(72, 'Rolls', 'Філадельфія#Теплі роли#Лосось', 'Рол Нью-Йорк', 350, '310.00', '/Диплом/images/rolls-photo/roll-new-york.png', '/Диплом/videos/rolls/roll-new-york.mp4', '7#1#12#2#17#27#22'),
(73, 'Rolls', 'Філадельфія#Вугор', 'Самурай', 335, '450.00', '/Диплом/images/rolls-photo/samuray.png', '/Диплом/videos/rolls/samuray.mp4', '1#17#5#3#29#20#2#18#12'),
(74, 'Rolls', 'Філадельфія#Лосось', 'Токіо рол', 325, '420.00', '/Диплом/images/rolls-photo/tokio-roll.png', '/Диплом/videos/rolls/tokio-roll.mp4', '2#16#12#6#1'),
(75, 'Rolls', 'Макі', 'Макі авокадо', 110, '100.00', '/Диплом/images/rolls-photo/maki-avokado.png', '/Диплом/videos/rolls/maki-avokado.mp4', '29#1#5#17#20'),
(76, 'Rolls', 'Макі#Вугор', 'Макі вугор', 110, '165.00', '/Диплом/images/rolls-photo/maki-ugor.png', '/Диплом/videos/rolls/maki-ugor.mp4', '17#20#29#12#18#5'),
(77, 'Rolls', 'Макі', 'Макі гребінець', 110, '135.00', '/Диплом/images/rolls-photo/maki-grebeshok.png', '/Диплом/videos/rolls/maki-grebeshok.mp4', '32#20#10#7#19#29'),
(78, 'Rolls', 'Макі#Лосось', 'Макі копчений лосось', 110, '145.00', '/Диплом/images/rolls-photo/maki-kop-losos.png', '/Диплом/videos/rolls/maki-kop-losos.mp4', '20#29#7#30'),
(79, 'Rolls', 'Макі', 'Макі креветка', 110, '155.00', '/Диплом/images/rolls-photo/maki-krevetka.png', '/Диплом/videos/rolls/maki-krevetka.mp4', '4#29#20#19'),
(80, 'Rolls', 'Макі#Лосось', 'Макі лосось', 110, '140.00', '/Диплом/images/rolls-photo/maki-losos.png', '/Диплом/videos/rolls/maki-losos.mp4', '6#20#29'),
(81, 'Rolls', 'Макі', 'Макі огірок', 110, '80.00', '/Диплом/images/rolls-photo/maki-ogurez.png', '/Диплом/videos/rolls/maki-ogurez.mp4', '17#12#5#20#29'),
(82, 'Rolls', 'Макі', 'Макі сніжний краб', 110, '110.00', '/Диплом/images/rolls-photo/maki-sneshniy-krab.png', '/Диплом/videos/rolls/maki-sneshniy-krab.mp4', '20#27#29#19'),
(83, 'Rolls', 'Макі', 'Макі тунець', 110, '140.00', '/Диплом/images/rolls-photo/maki-tunez.png', '/Диплом/videos/rolls/maki-tunez.mp4', '29#20#16'),
(88, 'Rolls', 'Гарячі#Теплі роли#Лосось#Інарі', 'Запечений інарі з мідіями (2шт)', 0, '200.00', '/Диплом/images/rolls-photo/zapechonuy-inari-midii.png', '/Диплом/videos/rolls/zapechonuy-inari-midii.mp4', '7#20#21#14#23'),
(89, 'Rolls', 'Гарячі#Вугор#Теплі роли', 'Запечений рол з вугрем', 330, '370.00', '/Диплом/images/rolls-photo/zapecenui-roll-z-ugor.png', '/Диплом/videos/rolls/zapecenui-roll-z-ugor.mp4', '18#1#12#21#2#17#5'),
(92, 'Rolls', 'Гарячі#Теплі роли', 'Запечений рол з тунцем в ікрі', 350, '370.00', '/Диплом/images/rolls-photo/zapecenui-roll-z-tunez-v-ikre.png', '/Диплом/videos/rolls/zapecenui-roll-z-tunez-v-ikre.mp4', '19#21#26#12#2#1#16'),
(93, 'Rolls', 'Гарячі#Теплі роли', 'Запечений рол зі сніжним крабом', 330, '260.00', '/Диплом/images/rolls-photo/zapecenui-roll-zi-snegnui-krab.png', '/Диплом/videos/rolls/zapecenui-roll-zi-snegnui-krab.mp4', '19#2#21#12#1#27'),
(104, 'Rolls', 'Вугор#Дракони#Лосось', 'Дракон Бронзовий', 310, '360.00', '/Диплом/images/rolls-photo/bronza-drakon.png', '/Диплом/videos/rolls/bronza-drakon.mp4', '33#1#17#2#20#6#12#5#18'),
(105, 'Rolls', 'Вугор#Дракони', 'Дракон Зелений', 315, '350.00', '/Диплом/images/rolls-photo/zelenuy-drakon.png', '/Диплом/videos/rolls/zelenuy-drakon.mp4', '29#5#1#17#2#12#18#20'),
(106, 'Rolls', 'Вугор#Дракони#Лосось', 'Дракон Чорний', 310, '370.00', '/Диплом/images/rolls-photo/chornuy-drakon.png', '/Диплом/videos/rolls/chornuy-drakon.mp4', '12#5#18#2#29#6#1#17#20'),
(107, 'Rolls', 'Вугор#Фірмові#Бейбі роли', 'Унагі рол (бейбі рол)', 180, '220.00', '/Диплом/images/rolls-photo/unagi-roll.png', '/Диплом/videos/rolls/unagi-roll.mp4', '5#17#18#2#14'),
(114, 'Rolls', 'Вугор#Теплі роли#Фірмові', 'Рол \"Два сира\" з вугрем', 240, '380.00', '/Диплом/images/rolls-photo/2-sira-v-ugre.png', '/Диплом/videos/rolls/2-sira-v-ugre.mp4', '1#37#18#29#7#20#2#17#38'),
(117, 'Rolls', 'Вугор#Теплі роли', 'Унагі темпура', 220, '305.00', '/Диплом/images/rolls-photo/unagi-tempura.png', '/Диплом/videos/rolls/unagi-tempura.mp4', '12#38#14#18#31#1#7#20#29'),
(118, 'Rolls', 'Вугор#Лосось#Фірмові', 'Якудза', 285, '410.00', '/Диплом/images/rolls-photo/yakudza.png', '/Диплом/videos/rolls/yakudza.mp4', '18#1#10#19#17#5#29#4#6#12#20'),
(132, 'Rolls', 'Теплі роли#Фірмові', 'Рол \"Два сира\"', 210, '230.00', '/Диплом/images/rolls-photo/roll-2-sira.png', '/Диплом/videos/rolls/roll-2-sira.mp4', '1#17#7#29#2#37#38#20'),
(135, 'Rolls', 'Теплі роли#Лосось#Фірмові', 'Сяке темпура', 220, '280.00', '/Диплом/images/rolls-photo/syake-tempura.png', '/Диплом/videos/rolls/syake-tempura.mp4', '1#20#12#7#38#10#14#6#29#31'),
(136, 'Rolls', 'Теплі роли', 'Тунець темпура', 220, '290.00', '/Диплом/images/rolls-photo/tunez-tempura.png', '/Диплом/videos/rolls/tunez-tempura.mp4', '14#10#12#20#31#38#1#7#16#29'),
(139, 'Rolls', 'Дракони', 'Дракон Вогненний', 315, '340.00', '/Диплом/images/rolls-photo/ognenuy-drakon.png', '/Диплом/videos/rolls/ognenuy-drakon.mp4', '16#14#34#12#22#29#20#2'),
(140, 'Rolls', 'Дракони', 'Дракон Жовтий', 290, '320.00', '/Диплом/images/rolls-photo/yellow-drakon.png', '/Диплом/videos/rolls/yellow-drakon.mp4', '3#1#35#2#17'),
(142, 'Rolls', 'Дракони#Лосось', 'Дракон Червоний', 290, '350.00', '/Диплом/images/rolls-photo/red-drakon.png', '/Диплом/videos/rolls/red-drakon.mp4', '20#29#6#19#31#1#12#4'),
(145, 'Rolls', 'Для вегетаріанців#Фірмові', 'Овочевий', 260, '180.00', '/Диплом/images/rolls-photo/ovoshnoy.png', '/Диплом/videos/rolls/ovoshnoy.mp4', '17#1#5#15#29#2#12#20'),
(146, 'Rolls', 'Для вегетаріанців#Фірмові#Бейбі роли', 'Філа рол', 135, '150.00', '/Диплом/images/rolls-photo/fila-roll.png', '/Диплом/videos/rolls/fila-roll.mp4', '5#20#29#17#2'),
(150, 'Rolls', 'Гарячі#Теплі роли#Лосось#Інарі', 'Запечений інарі з лососем та ікрою (2шт)', 0, '220.00', '/Диплом/images/sushi-photo/zapechonuy-inari-losos-ikra.png', '/Диплом/videos/sushi/zapechonuy-inari-losos-ikra.mp4', '22#20#21#14#17#10#12#7#5'),
(156, 'Rolls', 'Лосось#Футомакі', 'Футомакі Делюкс', 290, '320.00', '/Диплом/images/rolls-photo/futomaki-deluks.png', '/Диплом/videos/rolls/futomaki-deluks.mp4', '22#16#27#2#7'),
(172, 'Rolls', 'Лосось', 'Філадельфія зі смаженим лососем в кунжуті', 265, '280.00', '/Диплом/images/rolls-photo/filadelfiya-garenuy-losos-v-kungute.png', '/Диплом/videos/rolls/filadelfiya-garenuy-losos-v-kungute.mp4', '22#2#20#7#12#5#29'),
(173, 'Rolls', 'Лосось#Фірмові', 'Кіото', 300, '250.00', '/Диплом/images/rolls-photo/kioto.png', '/Диплом/videos/rolls/kioto.mp4', '29#1#5#20#14#15#17#7#12#22'),
(180, 'Rolls', 'Лосось#Фірмові', 'Темпура рол', 335, '420.00', '/Диплом/images/rolls-photo/tempura-roll.png', '/Диплом/videos/rolls/tempura-roll.mp4', '31#15#12#3#6#20#29#17#19'),
(192, 'Rolls', 'Фірмові', 'Аляска', 305, '370.00', '/Диплом/images/rolls-photo/alyaska.png', '/Диплом/videos/rolls/alyaska.mp4', '20#19#1#6#29#12#32#10'),
(200, 'Rolls', 'Фірмові#Бейбі роли', 'Авокадо рол', 135, '150.00', '/Диплом/images/rolls-photo/avokado-roll.png', '/Диплом/videos/rolls/avokado-roll.mp4', '17#29#20#1#2#5'),
(201, 'Rolls', 'Фірмові', 'Мідорі', 305, '320.00', '/Диплом/images/rolls-photo/midori.png', '/Диплом/videos/rolls/midori.mp4', '20#12#5#31#17#1#29#19#4'),
(221, 'Rolls', '#Гарячі#Вугор#Теплі роли#Інарі', 'Запечений інарі з вугрем (2шт)', 0, '240.00', '/Диплом/images/rolls-photo/zapechonuy-inari-vugor.png', '/Диплом/videos/rolls/zapechonuy-inari-vugor.mp4', '21#20#18#17#19#12#5'),
(222, 'Kits', 'Філадельфія#Лосось', '\"Філадельфія\" Міnі', 1045, '1060.00', '/Диплом/images/kits-photo/nabor-filadelfiya-mini.png', '/Диплом/videos/kits/nabor-filadelfiya-mini.mp4', '60#63#62#61'),
(223, 'Kits', 'Філадельфія#Вугор#Лосось', 'Набір \"One Kilogram\"', 1065, '900.00', '/Диплом/images/kits-photo/nabor-one-kilogram.png', '/Диплом/videos/kits/nabor-one-kilogram.png', '65#64#62#66'),
(225, 'Kits', 'Філадельфія#Вугор', 'Набір \"Філадельфія з вугрем\"', 940, '1080.00', '/Диплом/images/kits-photo/nabor-fila-s-ugor.png', '/Диплом/videos/kits/nabor-fila-s-ugor.mp4', '70#72#71#73'),
(226, 'Kits', 'Філадельфія#Лосось', 'Набір \"Філадельфія з лососем\"', 945, '995.00', '/Диплом/images/kits-photo/nabor-fila-s-lososem.png', '/Диплом/videos/kits/nabor-fila-s-lososem.mp4', '61#79#80#70'),
(227, 'Kits', 'Філадельфія#Інарі', 'Набір \"Логово драконів\"', 1830, '1850.00', '/Диплом/images/kits-photo/nabor-logovo-drakona.png', '/Диплом/videos/kits/nabor-logovo-drakona.mp4', '83#77#82#84#78#81'),
(228, 'Kits', 'Філадельфія#Вугор#Каліфорнія#Лосось#Футомакі', 'Набір \"Гейша\"', 1890, '1850.00', '/Диплом/images/kits-photo/nabor-geysha.png', '/Диплом/videos/kits/nabor-geysha.mp4', '79#62#85#86#72#63'),
(229, 'Kits', 'Філадельфія#Лосось', '\"Філадельфія\" Махі', 1350, '1450.00', '/Диплом/images/kits-photo/nabor-filadelfiya-maxi.png', '/Диплом/videos/kits/nabor-filadelfiya-maxi.mp4', '60#61#88#91#89'),
(230, 'Kits', 'Філадельфія#Вугор#Лосось', '\"Філадельфія\" в ікрі', 1080, '1250.00', '/Диплом/images/kits-photo/nabor-filadelfia-v-ikri.png', '/Диплом/videos/kits/nabor-fila-v-ikre.mp4', '90#79#71#92'),
(231, 'Kits', 'Філадельфія#Вугор#Каліфорнія#Лосось#Футомакі', 'Набір \"Сумо\"', 1920, '1750.00', '/Диплом/images/kits-photo/nabor-sumo.png', '/Диплом/videos/kits/nabor-sumo.mp4', '93#66#94#95#87#85#80'),
(232, 'Kits', 'Філадельфія#Макі#Нігірі#Вугор#Лосось', 'Набір \"Сяке Унагі\"', 787, '950.00', '/Диплом/images/kits-photo/nabor-syake-unagi.png', '/Диплом/videos/kits/nabor-syake-unagi.mp4', '98#99#100#78#72'),
(233, 'Kits', 'Філадельфія#Макі#Лосось', 'Набір №4', 1005, '890.00', '/Диплом/images/kits-photo/nabor-№4.png', '/Диплом/videos/kits/nabor-№4.mp4', '98#102#66#64#62'),
(234, 'Kits', 'Макі#Вугор#Лосось', 'Набір \"Макі\"', 440, '470.00', '/Диплом/images/kits-photo/nabor-maki.png', '/Диплом/videos/kits/nabor-maki.mp4', '98#103#104#102'),
(235, 'Kits', 'Гарячі#Теплі роли#Лосось#Інарі', 'Набір \"Запечених інарі під сирним соусом\"', 410, '599.00', '/Диплом/images/kits-photo/nabor-zapechonuy-inari.png', '/Диплом/videos/kits/nabor-zapechonuy-inari.mp4', '68#69#67'),
(236, 'Kits', 'Теплі роли', 'Набір \"Теплих ролів\"', 760, '700.00', '/Диплом/images/kits-photo/nabor-tepluh-rollov.png', '/Диплом/videos/kits/nabor-tepluh-rollov.mp4', '74#75#76'),
(237, 'Sushi', 'Гарячі#Вугор#Теплі роли#Інарі', 'Запечений інарі з вугрем (2шт)', 0, '240.00', '/Диплом/images/sushi-photo/zapechonuy-inari-vugor.png', '/Диплом/videos/sushi/zapechonuy-inari-vugor.mp4', '21#20#18#17#19#12#5'),
(238, 'Sushi', 'Гарячі#Теплі роли#Лосось#Інарі', 'Запечений інарі з лососем та ікрою (2шт)', 0, '220.00', '/Диплом/images/sushi-photo/zapechonuy-inari-losos-ikra.png', '/Диплом/videos/sushi/zapechonuy-inari-losos-ikra.mp4', '22#20#21#14#17#10#12#7#5'),
(239, 'Sushi', 'Гарячі#Теплі роли#Лосось#Інарі', 'Запечений інарі з мідіями (2шт)', 0, '200.00', '/Диплом/images/rolls-photo/zapechonuy-inari-midii.png', '/Диплом/videos/rolls/zapechonuy-inari-midii.mp4', '7#20#21#14#23'),
(240, 'Sushi', 'Нігірі', 'Нігірі Креветка', 56, '135.00', '/Диплом/images/sushi-photo/nigiri-krevetka.png', '/Диплом/videos/sushi/nigiri-krevetka.mp4', '20#4'),
(241, 'Sushi', 'Нігірі', 'Нігірі Авокадо', 56, '90.00', '/Диплом/images/sushi-photo/nigiri-avokado.png', '/Диплом/videos/sushi/nigiri-avokado.mp4', '1#17#5#29#20'),
(242, 'Sushi', 'Нігірі#Вугор', 'Нігірі Вугор', 56, '140.00', '/Диплом/images/sushi-photo/nigiri-ugor.png', '/Диплом/videos/sushi/nigiri-ugor.mp4', '18#5#17#29#20'),
(243, 'Sushi', 'Нігірі', 'Нігірі Копчений лосось', 56, '115.00', '/Диплом/images/sushi-photo/nigiri-kopyenuy-losos.png', '/Диплом/videos/sushi/nigiri-kopyenuy-losos.mp4', '30#20'),
(244, 'Sushi', 'Нігірі#Лосось', 'Нігірі Лосось', 56, '110.00', '/Диплом/images/sushi-photo/nigiri-losos.png', '/Диплом/videos/sushi/nigiri-losos.mp4', '6#20'),
(245, 'Sushi', 'Нігірі', 'Нігірі Окунь', 56, '95.00', '/Диплом/images/sushi-photo/nigiri-okun.png', '/Диплом/videos/sushi/nigiri-okun.mp4', '20#13'),
(246, 'Sushi', 'Нігірі', 'Нігірі Тунець', 56, '110.00', '/Диплом/images/sushi-photo/nigiri-tunez.png', '/Диплом/videos/sushi/nigiri-tunez.mp4', '20#16'),
(247, 'Sushi', 'Гункани', 'Гункан Масаго', 60, '125.00', '/Диплом/images/sushi-photo/gunkan-masago.png', '/Диплом/videos/sushi/gunkan-masago.mp4', '10#20#29'),
(248, 'Sushi', 'Гункани', 'Гункан Фелікс', 60, '130.00', '/Диплом/images/sushi-photo/gunkan-feliks.png', '/Диплом/videos/sushi/gunkan-feliks.mp4', '20#7#32#29#19#10'),
(249, 'Sushi', 'Гункани#Вугор', 'Спайс вугор', 60, '150.00', '/Диплом/images/sushi-photo/spice-ugor.png', '/Диплом/videos/sushi/spice-ugor.mp4', '10#18#12#20#29#14'),
(250, 'Sushi', 'Гункани#Лосось', 'Спайс копчений лосось', 60, '140.00', '/Диплом/images/sushi-photo/spice-kop-losos.png', '/Диплом/videos/sushi/spice-kop-losos.mp4', '10#30#12#20#29#14'),
(251, 'Sushi', 'Гункани', 'Спайс креветка', 60, '140.00', '/Диплом/images/sushi-photo/spice-krevetka.png', '/Диплом/videos/sushi/spice-krevetka.mp4', '10#4#12#20#29#14'),
(252, 'Sushi', 'Гункани#Лосось', 'Спайс лосось', 60, '135.00', '/Диплом/images/sushi-photo/spice-losos.png', '/Диплом/videos/sushi/spice-losos.mp4', '12#6#29#20#10#14'),
(253, 'Sushi', 'Гункани', 'Спайс окунь', 60, '125.00', '/Диплом/images/sushi-photo/spice-okun.png', '/Диплом/videos/sushi/spice-okun.mp4', '10#13#12#20#29#1'),
(254, 'Sushi', 'Гункани', 'Спайс тунець', 60, '140.00', '/Диплом/images/sushi-photo/spice-tunez.png', '/Диплом/videos/sushi/spice-tunez.mp4', '12#16#10#20#29#14'),
(255, 'Sushi', 'Вугор#Інарі', 'Інарі з вугрем', 140, '220.00', '/Диплом/images/sushi-photo/inari-ugor.png', '/Диплом/videos/sushi/inari-ugor.mp4', '14#5#18#17#12'),
(256, 'Sushi', 'Вугор', 'Сашимі вугор', 50, '170.00', '/Диплом/images/sushi-photo/sashimi-ugor.png', '/Диплом/videos/sushi/sashimi-ugor.mp4', '18#17#31#12#5'),
(257, 'Sushi', 'Лосось#Інарі', 'Інарі з лососем', 140, '210.00', '/Диплом/images/sushi-photo/inari-losos.png', '/Диплом/videos/sushi/inari-losos.mp4', '6#14#12#5'),
(258, 'Sushi', 'Лосось', 'Сашимі лосось', 50, '140.00', '/Диплом/images/sushi-photo/sashimi-losos.png', '/Диплом/videos/sushi/sashimi-losos.mp4', '42#31#10#6'),
(259, 'Sushi', 'Інарі', 'Інарі з гребінцем', 140, '210.00', '/Диплом/images/sushi-photo/inari-grebeshok.png', '/Диплом/videos/sushi/inari-grebeshok.mp4', '32#10#19#7'),
(260, 'Salads', 'Вугор', 'Унагі сарада', 250, '230.00', '/Диплом/images/salads-photo/unagi-sarada.png', '/Диплом/videos/salads/unagi-sarada.mp4', '10#5#1#17#18#20#19#12'),
(261, 'Salads', 'Лосось', 'Лососевий смузі', 100, '200.00', '/Диплом/images/salads-photo/lososewuy-smuzi.png', '/Диплом/videos/salads/lososewuy-smuzi.mp4', '5#6#42'),
(262, 'Salads', 'Лосось', 'Сяке сарада', 235, '220.00', '/Диплом/images/salads-photo/syake-sarada.png', '/Диплом/videos/salads/syake-sarada.mp4', '12#10#6#1#20#19'),
(263, 'Salads', 'Лосось', 'Цезар з лососем', 450, '280.00', '/Диплом/images/salads-photo/cezar-losos.png', '/Диплом/videos/salads/cezar-losos.mp4', '6#10#31#39#15'),
(264, 'Hot meals', 'Гриль роли#Гарячі#Теплі роли#Лосось', 'Гриль рол з лососем', 320, '420.00', '/Диплом/images/rolls-photo/gril-roll-losos.png', '/Диплом/videos/rolls/gril-roll-losos.mp4', '6#3#1#9#2'),
(265, 'Hot meals', 'Гриль роли#Гарячі#Теплі роли', 'Запечений рол з креветкою кранч', 350, '370.00', '/Диплом/images/rolls-photo/zapecenui-roll-z-krewetka-kranch.png', '/Диплом/videos/rolls/zapecenui-roll-z-krewetka-kranch.mp4', '3#2#14#21#12#19'),
(266, 'Hot meals', 'Гриль роли#Гарячі#Теплі роли', 'Запечений рол з куркою кранч', 350, '280.00', '/Диплом/images/rolls-photo/zapecenui-roll-z-kuricoy-kranch.png', '/Диплом/videos/rolls/zapecenui-roll-z-kuricoy-kranch.mp4', '25#2#14#21#12#19#24'),
(267, 'Hot meals', 'Філадельфія#Теплі роли#Лосось', 'Рол Нью-Йорк', 350, '310.00', '/Диплом/images/rolls-photo/roll-new-york.png', '/Диплом/videos/rolls/roll-new-york.mp4', '7#1#12#2#17#27#22'),
(268, 'Hot meals', 'Гарячі', 'Ебі темпура', 150, '250.00', '/Диплом/images/hot meals-photo/ebi-tempura.png', '/Диплом/videos/hot meals/ebi-tempura.mp4', '3#14'),
(269, 'Hot meals', 'Гарячі#Вугор#Теплі роли#Інарі', 'Запечений інарі з вугрем (2шт)', 0, '240.00', '/Диплом/images/rolls-photo/zapechonuy-inari-vugor.png', '/Диплом/videos/rolls/zapechonuy-inari-vugor.mp4', '21#20#18#17#19#12#5'),
(270, 'Hot meals', 'Гарячі#Теплі роли#Лосось#Інарі', 'Запечений інарі з лососем та ікрою (2шт)', 0, '220.00', '/Диплом/images/sushi-photo/zapechonuy-inari-losos-ikra.png', '/Диплом/videos/sushi/zapechonuy-inari-losos-ikra.mp4', '22#20#21#14#17#10#12#7#5'),
(271, 'Hot meals', 'Гарячі#Теплі роли#Лосось#Інарі', 'Запечений інарі з мідіями (2шт)', 0, '200.00', '/Диплом/images/rolls-photo/zapechonuy-inari-midii.png', '/Диплом/videos/rolls/zapechonuy-inari-midii.mp4', '7#20#21#14#23'),
(272, 'Hot meals', 'Гарячі#Вугор#Теплі роли', 'Запечений рол з вугрем', 330, '370.00', '/Диплом/images/rolls-photo/zapecenui-roll-z-ugor.png', '/Диплом/videos/rolls/zapecenui-roll-z-ugor.mp4', '18#1#12#21#2#17#5'),
(273, 'Hot meals', 'Гарячі#Теплі роли', 'Запечений рол з тунцем в ікрі', 350, '370.00', '/Диплом/images/rolls-photo/zapecenui-roll-z-tunez-v-ikre.png', '/Диплом/videos/rolls/zapecenui-roll-z-tunez-v-ikre.mp4', '19#21#26#12#2#1#16'),
(274, 'Hot meals', 'Гарячі#Теплі роли', 'Запечений рол зі сніжним крабом', 330, '260.00', '/Диплом/images/rolls-photo/zapecenui-roll-zi-snegnui-krab.png', '/Диплом/videos/rolls/zapecenui-roll-zi-snegnui-krab.mp4', '19#2#21#12#1#27'),
(275, 'Hot meals', 'Гарячі', 'Картопляні крокети кранч', 140, '100.00', '/Диплом/images/hot meals-photo/kroketu_kartofel-kranch.png', '/Диплом/videos/hot meals/kroketu-kartofel-kranch.mp4', '14#21'),
(276, 'Hot meals', 'Гарячі', 'Мідії (20 штук)', 0, '285.00', '/Диплом/images/hot meals-photo/midii.png', '/Диплом/videos/hot meals/midii.mp4', '23#35'),
(277, 'Hot meals', 'Гарячі#Супи', 'Місо', 280, '85.00', '/Диплом/images/hot meals-photo/miso.png', '/Диплом/videos/hot meals/miso.mp4', '38#5#49#50#52'),
(278, 'Hot meals', 'Гарячі#Супи#Вугор', 'Місо з вугрем', 300, '120.00', '/Диплом/images/hot meals-photo/miso-ugor.png', '/Диплом/videos/hot meals/miso-ugor.mp4', '44#49#50#18#5'),
(279, 'Hot meals', 'Гарячі#Супи#Лосось', 'Місо з лососем та часником', 300, '110.00', '/Диплом/images/hot meals-photo/miso-losos-garlic.png', '/Диплом/videos/hot meals/miso-losos-garlic.mp4', '6#50#5#49#51#52'),
(280, 'Hot meals', 'Гарячі#Супи#Для вегетаріанців#Лосось', 'Місо з морепродуктами', 300, '140.00', '/Диплом/images/hot meals-photo/miso-moreprodukti.png', '/Диплом/videos/hot meals/miso-moreprodukti.mp4', '52#5#4#32#6'),
(281, 'Hot meals', 'Гарячі', 'Моцарела кранч', 140, '165.00', '/Диплом/images/hot meals-photo/mozarella-kranch.png', '/Диплом/videos/hot meals/mozarella-kranch.mp4', '14#43'),
(282, 'Hot meals', 'Гарячі', 'Пельмені (15 штук)', 0, '135.00', '/Диплом/images/hot meals-photo/pelmeni.png', '/Диплом/videos/hot meals/pelmeni.mp4', '35#2'),
(283, 'Hot meals', 'Гарячі', 'Попкорн з креветок', 120, '240.00', '/Диплом/images/hot meals-photo/popkorn-krevetka.png', '/Диплом/videos/hot meals/popkorn-krevetka.mp4', '3#8'),
(284, 'Hot meals', 'Гарячі', 'Рис з куркою', 400, '175.00', '/Диплом/images/hot meals-photo/ris-kurka.png', '/Диплом/videos/hot meals/ris-kurka.mp4', '51#5#53#15#39#7#34#25#20#54'),
(285, 'Hot meals', 'Гарячі#Супи', 'Суп рамен з куркою', 440, '210.00', '/Диплом/images/hot meals-photo/sup-ramen-kurka.png', '/Диплом/videos/hot meals/sup-ramen-kurka.mp4', '55#25#45#34#39#7'),
(286, 'Hot meals', 'Гарячі#Супи', 'Суп Том-Кха', 580, '240.00', '/Диплом/images/hot meals-photo/sup-tom-kha.png', '/Диплом/videos/hot meals/sup-tom-kha.mp4', '5#6#7#38#54#44#56'),
(287, 'Hot meals', 'Гарячі#Супи', 'Том-Ям з креветкою', 500, '240.00', '/Диплом/images/hot meals-photo/tom-yam-krevetka.png', '/Диплом/videos/hot meals/tom-yam-krevetka.mp4', '44#56#39#7#3'),
(288, 'Hot meals', 'Гарячі#Супи', 'Том-Ям з куркою', 500, '205.00', '/Диплом/images/hot meals-photo/tom-yam-kurka.png', '/Диплом/videos/hot meals/tom-yam-kurka.mp4', '44#56#55#39#25#5#49#54'),
(289, 'Hot meals', 'Вугор#Теплі роли#Фірмові', 'Рол \"Два сира\" з вугрем', 240, '380.00', '/Диплом/images/rolls-photo/2-sira-v-ugre.png', '/Диплом/videos/rolls/2-sira-v-ugre.mp4', '1#37#18#29#7#20#2#17#38'),
(290, 'Hot meals', 'Вугор#Теплі роли', 'Унагі темпура', 220, '305.00', '/Диплом/images/rolls-photo/unagi-tempura.png', '/Диплом/videos/rolls/unagi-tempura.mp4', '12#38#14#18#31#1#7#20#29'),
(291, 'Hot meals', 'Теплі роли#Фірмові', 'Рол \"Два сира\"', 210, '230.00', '/Диплом/images/rolls-photo/roll-2-sira.png', '/Диплом/videos/rolls/roll-2-sira.mp4', '1#17#7#29#2#37#38#20'),
(292, 'Hot meals', 'Теплі роли#Лосось#Фірмові', 'Сяке темпура', 220, '280.00', '/Диплом/images/rolls-photo/syake-tempura.png', '/Диплом/videos/rolls/syake-tempura.mp4', '1#20#12#7#38#10#14#6#29#31'),
(293, 'Hot meals', 'Теплі роли', 'Тунець темпура', 220, '290.00', '/Диплом/images/rolls-photo/tunez-tempura.png', '/Диплом/videos/rolls/tunez-tempura.mp4', '14#10#12#20#31#38#1#7#16#29'),
(294, 'Desserts', 'Для вегетаріанців#Фірмові', 'Манговий рол', 190, '130.00', '/Диплом/images/desserts-photo/mango-roll.png', '/Диплом/videos/desserts/mango-roll.mp4', '57#9#58'),
(295, 'Desserts', 'Для вегетаріанців#Фірмові', 'Фруктовий рол', 190, '130.00', '/Диплом/images/desserts-photo/fruktoviy-roll.png', '/Диплом/videos/desserts/fruktoviy-roll.mp4', '1#57#58#59'),
(296, 'Desserts', 'Фірмові', 'Рисові кульки', 130, '90.00', '/Диплом/images/desserts-photo/risovie-shariki.png', '/Диплом/videos/desserts/risovie-shariki.mp4', '5#14#17'),
(297, 'Vegetarian', 'Макі', 'Макі авокадо', 110, '100.00', '/Диплом/images/rolls-photo/maki-avokado.png', '/Диплом/videos/rolls/maki-avokado.mp4', '29#1#5#17#20'),
(298, 'Vegetarian', 'Макі', 'Макі огірок', 110, '80.00', '/Диплом/images/rolls-photo/maki-ogurez.png', '/Диплом/videos/rolls/maki-ogurez.mp4', '17#12#5#20#29'),
(299, 'Vegetarian', 'Гарячі', 'Картопляні крокети кранч', 140, '100.00', '/Диплом/images/hot meals-photo/kroketu_kartofel-kranch.png', '/Диплом/videos/hot meals/kroketu-kartofel-kranch.mp4', '14#21'),
(300, 'Vegetarian', 'Гарячі', 'Моцарела кранч', 140, '165.00', '/Диплом/images/hot meals-photo/mozarella-kranch.png', '/Диплом/videos/hot meals/mozarella-kranch.mp4', '14#43'),
(301, 'Vegetarian', 'Нігірі', 'Нігірі Авокадо', 56, '90.00', '/Диплом/images/sushi-photo/nigiri-avokado.png', '/Диплом/videos/sushi/nigiri-avokado.mp4', '1#17#5#29#20'),
(303, 'Vegetarian', 'Теплі роли#Фірмові', 'Рол \"Два сира\"', 210, '230.00', '/Диплом/images/rolls-photo/roll-2-sira.png', '/Диплом/videos/rolls/roll-2-sira.mp4', '1#17#7#29#2#37#38#20'),
(304, 'Vegetarian', 'Для вегетаріанців#Фірмові', 'Манговий рол', 190, '130.00', '/Диплом/images/desserts-photo/mango-roll.png', '/Диплом/videos/desserts/mango-roll.mp4', '57#9#58'),
(305, 'Vegetarian', 'Для вегетаріанців#Фірмові', 'Овочевий', 260, '180.00', '/Диплом/images/rolls-photo/ovoshnoy.png', '/Диплом/videos/rolls/ovoshnoy.mp4', '17#1#5#15#29#2#12#20'),
(306, 'Vegetarian', 'Для вегетаріанців#Фірмові#Бейбі роли', 'Філа рол', 135, '150.00', '/Диплом/images/rolls-photo/fila-roll.png', '/Диплом/videos/rolls/fila-roll.mp4', '5#20#29#17#2'),
(307, 'Vegetarian', 'Для вегетаріанців#Фірмові', 'Фруктовий рол', 190, '130.00', '/Диплом/images/desserts-photo/fruktoviy-roll.png', '/Диплом/videos/desserts/fruktoviy-roll.mp4', '1#57#58#59'),
(308, 'Vegetarian', 'Фірмові', 'Рисові кульки', 130, '90.00', '/Диплом/images/desserts-photo/risovie-shariki.png', '/Диплом/videos/desserts/risovie-shariki.mp4', '5#14#17');

-- --------------------------------------------------------

--
-- Структура таблицы `restaurants`
--

CREATE TABLE `restaurants` (
  `restaurant_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `img_path` varchar(520) NOT NULL,
  `map_path` varchar(300) NOT NULL,
  `time_work` varchar(100) NOT NULL,
  `phones` varchar(50) NOT NULL,
  `count_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `restaurants`
--

INSERT INTO `restaurants` (`restaurant_id`, `title`, `place`, `img_path`, `map_path`, `time_work`, `phones`, `count_seats`) VALUES
(1, ' в м.Ірпінь, вул. Мечникова 108А', 'м.Ірпінь', '/Диплом/images/restaurants/Mechnikova/title.png', 'https://www.google.com/maps/place/Mechnykova+St,+108а,+Irpin,+Kyivs\'ka+oblast,+Ukraine,+08200/@50.518445,30.212672,17z/data=!4m6!3m5!1s0x472b316527efc93d:0xe0d1030b7ddbdee0!8m2!3d50.5192746!4d30.2126749!16s%2Fg%2F11t5lywny4?hl=en&entry=ttu', 'Пн-Пт: 11:00 – 22:00\r\nСб-Нд: 11:00 – 22:00', '(096) 555-85-85', 24),
(2, ' вул. Вербицького 1, ТЦ \"New Way\"', 'Позняки', '/Диплом/images/restaurants/Verbytskyi/title.png', 'https://www.google.com/maps/place/Томаха/@50.414719,30.651251,14z/data=!4m6!3m5!1s0x40d4c5209b339169:0xdbfa8c541b67d02d!8m2!3d50.4147193!4d30.6512513!16s%2Fg%2F11fhr75v29?hl=ru&entry=ttu', 'Пн-Нд: 10:00 – 22:00', '(097) 993-79-37', 60),
(3, ' у Василькові, вул. Соборна, 64/1', 'м. Васильків', '/Диплом/images/restaurants/Soborna/title.png', 'https://www.google.com/maps?ll=50.176189,30.316284&z=14&t=m&hl=ru&gl=UA&mapclient=embed&cid=4185369608329618928', 'Пн-Ср: 10:00 – 22:00\r\nЧт-Нд: 10:00 – 22:00', '(096) 555-61-55', 40),
(4, ' на вул. Милославська, 10а Вхід ТЦ «Милославський»', 'Троєщина, Деснянський район', '/Диплом/images/restaurants/Myloslavska/title.png', 'https://www.google.com/maps/place/ТЦ+%22Милославський%22/@50.533611,30.600556,14z/data=!4m6!3m5!1s0x40d4d11558602d07:0x92719dd3551fe0d8!8m2!3d50.5336111!4d30.6005556!16s%2Fg%2F11gzfd46n?hl=ru&entry=ttu', 'Пн-Нд: 10:00 – 22:00', '(096) 909-55-57', 40),
(5, ' на бул. Кольцова, 14м Вхід ТЦ «Сільпо»', 'Борщагівка, Святошинський район', '/Диплом/images/restaurants/Koltsova/title.png', 'https://www.google.com/maps/place/Сильпо/@50.424658,30.382953,14z/data=!4m6!3m5!1s0x40d4cb926de751f5:0x9c6536664ea00868!8m2!3d50.4246581!4d30.3829532!16s%2Fg%2F1pp2tzqtg?hl=ru&entry=ttu', 'Пн-Нд: 10:00 – 22:00', '(068) 146-43-43', 40),
(6, ' на вул. Юрія Кондратюка 3', 'Оболонський район', '/Диплом/images/restaurants/Yuriy Kondratyuk/title.png', 'https://www.google.com/maps?ll=50.526699,30.457409&z=12&t=m&hl=ru&gl=UA&mapclient=embed&q=ул.+Юрия+Кондратюка,+3+Киев+02000', 'Пн-Нд: 10:00 – 22:00', '(068) 888-83-13', 40),
(7, ' на вул. Гната Юри, 20. Вхід ТЦ «Квадрат»', 'Борщагівка, Святошинський район', '/Диплом/images/restaurants/Hnata Yury/title.png', 'https://www.google.com/maps/place/Томаха/@50.431356,30.383602,16z/data=!4m6!3m5!1s0x40d4cb892c7c5723:0x845c0c1672f9bab1!8m2!3d50.4313564!4d30.3836024!16s%2Fg%2F11b_2vsv01?hl=ru&entry=ttu', 'Пн-Нд: 10:00 – 22:00', '(068) 146-49-49', 40);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `filters`
--
ALTER TABLE `filters`
  ADD PRIMARY KEY (`id_filter`);

--
-- Индексы таблицы `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id_ingredients`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Индексы таблицы `Products`
--
ALTER TABLE `Products`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `filters`
--
ALTER TABLE `filters`
  MODIFY `id_filter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id_ingredients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Products`
--
ALTER TABLE `Products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT для таблицы `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
