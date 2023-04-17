<!--
Name: Affise "Widget Stream Template"         
----------------------------------------------------------
Project: Afi-WST [v1.12.1R] - Releas                    
Application programming interface: Affise-API 
modules:HTML[5],CSS[3],PHP[8.0],jquery[3.6.3],bootstrap 5
----------------------------------------------------------
Made to Order: Profitales [CompanyName]            
Code by Arkomiko                                   
-->

<!-- 
    ----------------------------------------------------------
    Инструкция!!!
    ----------------------------------------------------------
    Всё максимально просто оптимизированно для гибкого редактирования!
    Для понимания что трогать, а что нет - вся страница имеет комментарии. А в коментариях есть услоные обозначения - Якоря. 
        (Их можно называть как угодно, тег/элемент/id/линия/значения и т.д. Но я решил называть их Якорями.) 

    Пример вида поиска: #якорь-Подъякоря.доп 

    Основной "якорь".
    ' #ledit ' - lines to edit. комментированный якорь быстрого поиска для редактирования строк

    Дополнительные "Подъякоря"
    '...-url ' - lines to edit. комментированный якорь быстрого поиска для редактирования строк
    '...-head.name ' - lines to edit. комментированный якорь быстрого поиска для редактирования строк
    '...- ' - lines to edit. комментированный якорь быстрого поиска для редактирования строк
    '... ' - lines to edit. комментированный якорь быстрого поиска для редактирования строк
    '... ' - lines to edit. комментированный якорь быстрого поиска для редактирования строк
    '... ' - lines to edit. комментированный якорь быстрого поиска для редактирования строк
    '... ' - lines to edit. комментированный якорь быстрого поиска для редактирования строк


    [Подсказка]: нажми Ctrl+F для поиска. И в троку поиска надо вести "якорь" или "якорь.подъякорь"

    ----------------------------------------------------------
    Инструкция по URL ссылкам c API.
    ----------------------------------------------------------
    Пример "http://domen.com/3.0/stats/conversions?API-Key=9999999&date_from=2023-01-01&date_to=2048-03-09&subid2=moakaash&status=1&limit=1&device=desktop",
    [http://domen.com/] - "Домен"
    [../3.0/stats/conversions] - "Конечный путь где находиться та, или иная функция API"
    [../conversions?] - Знак "?" после пути это запрос. 
    Если запросов или же условий больше то между ними ставиться знак "&" (пример: [?день&месяц&год] условно запрашивал фунцкию дня,месяца и года)
    Состав запросов из примера для виджета
    ?API-Key=9999999 === API Ключь для потключения
    &date_from=2023-01-01 === В "conversions" находиться отчёт где надо прописывать условия времени "от" даты 
    &date_to=2048-03-09 === "до" Даты 
    &subid2=moakaash === ВАЖНО - это условие - "Саб_Айди=Ник" стримера
    &status=1&limit=1 === необходимые условия по документации
    &device=desktop === Обозначение платформы/дивайса

 -->

<!DOCTYPE html>
<html>

<head>
    <!-- Название странички (видно в браузере) -->
    <title>Template Widget [v1.12.1R] ~ by Ariko</title> <!-- #ledit-head.name -->
    <link rel="shortcut icon" href="/svg/icon.svg">
    <!--  Мета-настройки -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Настройки стиля -->
    <link href="/css/widget.css" rel="stylesheet">

    <!-- jquery -->
    <!-- <script src="/js/jquery.min.js"></script> -->

    <!-- bootstrap 5 -->
    <link href="/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <script src="/js/bootstrap/bootstrap.min.js"></script>
    
    <!-- pyscript -->
    <link href="/css/pyscript.css" rel="stylesheet">
    <script src="/js/pyscript.js"></script>


</head>

<body onload="reloading();"> <!-- Тело Страницы с постоянным запросом -->

    <!-- Вывод значения "Progress bar" -->
    <div id="basis_PB" class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="3"
        aria-valuemin="0" aria-valuemax="100" style="height: 28px;"></div>
    <div id="fill_PB" class="progress-bar" style="width: 3%;"></div>

    <div>
        пришли
        <p id="total_count">null</p>
        из
        <p id="max_quantity">null</p>
        это
        <p id="progress">null</p>
    </div>

    <!-- ТЕСТ ЗОНА -->
    <!-- [Тест] результат в консоль и на страницу в виде обычного текста    -->
    <!-- <div id="console">console</div>                                    -->

</body>
    <!-- Настройки функций JavaScript -->
    <script src="/js/setting.js"></script>
</html>