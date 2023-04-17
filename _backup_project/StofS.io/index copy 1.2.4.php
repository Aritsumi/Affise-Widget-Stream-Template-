<!--
Name: Affise "Widget Stream Template"         
-------------------------------------------------
Project: Afi-WST [v1.2.4]                     
Application programming interface: Affise-API 
modules:HTML[5],CSS[3],PHP[8.0],jquery[3.6.3] 
-------------------------------------------------
Made to Order: Profitales [CompanyName]            
Code by Arkomiko                                   
-->
<html>

<head>
    <!-- Название странички (видно в браузере) -->
    <title>Template Widget (by Ariko)</title>

    <!--  Мета-настройки -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap 5 -->
    <link href="/css/bootstrap_5.3.0.a1/bootstrap.min.css" rel="stylesheet">
    <script src="/js/bootstrap_5.3.0.a1/bootstrap.min.js"></script>

    <!-- Свой "Кастомный" стиль -->
    <link href="/css/castom.css" rel="stylesheet">
    <!-- ------------------------ -->
</head>

<body>

    <?php
    //Коннект API [php method]
    $ch = curl_init();

    // После "?API-Key=" Вставить ключь!
    curl_setopt($ch, CURLOPT_URL, 'https://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0');

    // Метод потключения 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    // Результат страницы в переменую PHP
    $DTTC = curl_exec($ch); //DTTC - Direct Text To Console [Прямой текст на консоль]

    curl_close($ch);
    ?>



    <!-- Скрипт Коннект API -->


    <!-- [Test]:Скрипт автообновления -->
    <script>
        // setInterval("#connect_php", 6000);
    </script>

    <script id="connect_php">
        console.clear();
        console.log(<?echo $DTTC?>); //Переменная php "DTTC" в консоль
    </script> ';


    <script id="connect_php">
        //Из php, строка "DTTC" в переменную JS
        var console = <?php print_r($DTTC) ?>;

        //Переменные подкатологов API
        var total_count = console.pagination.total_count;
        var sub2 = console.conversions[44].sub2;

        // Примеры для прописывания новых элементов:
        // var НАЗВАНИЕ_ЭЛЕМЕНТА = console.ДЕРИКТОРИЯ.САМ_ЭЛЕМЕНТ
        // var НАЗВАНИЕ_ЭЛЕМЕНТА = console.САМ_ЭЛЕМЕНТ
    </script>

    <!-- Элементы с ID -->
    <div id="total_count">_</div>
    <div id="sub2">_</div>

    <script id="connect_php">
        //Замена "_" на значение элемента.
        document.getElementById("sub2").innerHTML = sub2;
        document.getElementById("total_count").innerHTML = total_count;
    </script>
</body>

</html>

<!-- 


 -->