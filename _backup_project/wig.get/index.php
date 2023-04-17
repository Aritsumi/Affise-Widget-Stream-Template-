<!--
Name: Affise "Widget Stream Template"         
-------------------------------------------------
Project: Afi-WST [v0.6.3]                     
Application programming interface: Affise-API 
modules:HTML[5],CSS[3],PHP[8.0],jquery[3.6.3] 
-------------------------------------------------
Made to Order: Profitales [CompanyName]            
Code by Arkomiko                                   
-->

<!-- Коннект API [php method] -->
<?php
    $ch = curl_init();

    // После "?API-Key=" Вставить ключь!
    curl_setopt($ch, CURLOPT_URL, 'https://api-admachina.affise.com/3.0/stats/conversions?API-Key=c14e1f30a21441d4d41339f17f2098ed');

    //Метод потключения 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    
    //Результат страницы в переменую PHP
    $DTTC = curl_exec($ch); //DTTC - Direct Text To Console [Прямой текст на консоль]
    
    curl_close($ch); 
?>

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

    <!-- [Test]:Скрипт автообновления -->
    <!-- <script>
        setTimeout(function() {
            location.reload();
        }, 15000);
    </script> -->
</head>

<body>

    <?php //Переменная php "DTTC" в консоль
    echo '<script> console.log(', $DTTC, '); </script> ';
    ?>

    <!-- [Test]:Для проверки "DTTC" не в консоле -->
    <!-- 
        <span id="out_text_line">
        <?php //print_r($DTTC);?>
        </span> 
    -->


    <script>
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

    <script>
        //Замена "_" на значение элемента.
        document.getElementById("sub2").innerHTML = sub2;
        document.getElementById("total_count").innerHTML = total_count;
    </script>
</body>
</html>

<!-- 


 -->