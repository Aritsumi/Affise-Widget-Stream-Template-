<!--
Name: Affise "Widget Stream Template"         
-------------------------------------------------
Project: Afi-WST [v1.9.91i]                     
Application programming interface: Affise-API 
modules:HTML[5],CSS[3],PHP[8.0],jquery[3.6.3] 
-------------------------------------------------
Made to Order: Profitales [CompanyName]            
Code by Arkomiko                                   
-->

<!-- Коннект API [php method] -->
<?php
$url_api_php = ['http://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0&date_from=2023-01-01&date_to=2048-03-09&subid2=test&status=1&limit=1&device=desktop&offer=3725'];

$DTTC = [];

$old = md5("old");
$i = 1;
while ($i<=10) {
    
    $new = md5();
    if (strcmp($old, $new) !== 0){
        $old = $new;
        // $ch = curl_init();

        // // После "?API-Key=" Вставить ключь!

        // // Метод потключения 
        // curl_setopt($ch, CURLOPT_URL, $url_api_php);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        // // Timeout in seconds
        // curl_setopt($ch, CURLOPT_TIMEOUT, $TIMEOUT);

        // //DTTC - Direct Text To Console [Прямой текст на консоль]
        // $DTTC = curl_exec($ch);

        // curl_close($ch);
    }
    
    // var_dump($DTTC);
    $i++;
    sleep(10);
}

// $url_api_php = ['http://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0&date_from=2023-01-01&date_to=2048-03-09&subid2=test&status=1&limit=1&device=desktop&offer=3725'];
// $TIMEOUT = 10; //Таймер на запрос в секундах

// $DTTC = [];

// foreach ($url_api_php as $url_api_php) {
//     $ch = curl_init();

//     // После "?API-Key=" Вставить ключь!

//     // Метод потключения 
//     curl_setopt($ch, CURLOPT_URL, $url_api_php);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

//     // Timeout in seconds
//     curl_setopt($ch, CURLOPT_TIMEOUT, $TIMEOUT);

//     //DTTC - Direct Text To Console [Прямой текст на консоль]
//     $DTTC = curl_exec($ch);

//     curl_close($ch);
// };

// var_dump($DTTC);
    
?>

<html>

<head>
    <!-- Название странички (видно в браузере) -->
    <title>Template Widget (by Ariko)</title>
    <!--  Мета-настройки -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jquery -->
    <script src="/js/jquery.min.js"></script>
    <!-- bootstrap 5 -->
    <link href="/css/bootstrap_5.3.0.a1/bootstrap.min.css" rel="stylesheet">
    <script src="/js/bootstrap_5.3.0.a1/bootstrap.min.js"></script>
    <!-- Свой "Кастомный" стиль -->
    <link href="/css/castom.css" rel="stylesheet">
    <!-- ------------------------ -->
</head>

<body>

    <script>
        // AJAX SETTINGS

        // ТАЙМЕР ОБНОВЛЕНИЯ
        var timer = 8000;

        //Коннект API [jQuery method]
        const settings = {
            "async": true,
            "crossDomain": true,
            "url": "<? echo $url_api_php ?>",
            "method": "GET",
        };

      

        //HTML ОТБРАЖЕНИЕ


        //НАСТРОЙКА ПЕРЕМЕНЫХ В ОТДЕЛЬНЫЕ ЭЛЕМЕНТЫ
        // var total_count = wgt.pagination.total_count;
        // var sub2 = inference.conversions[44].sub2;

        // Примеры для прописывания новых элементов:
        // var НАЗВАНИЕ_ЭЛЕМЕНТА = inference.ЭЛЕМЕНТ
        // var НАЗВАНИЕ_ЭЛЕМЕНТА = inference.ДЕРИКТОРИЯ.ЭЛЕМЕНТ


        function html_out() {

            $.ajax(settings).done(
            function ajax_out(response) {
                console.clear();
                console.log(response); // В консоль отображаеться ответ
            }
        );


            //Замена "_" на значение элемента.
            // document.getElementById("sub2").innerHTML = sub2;
            document.getElementById("total_count").innerHTML = total_count;
            // Примеры для прописывания новых элементов:
        };
    </script>
    ------------------------
    <!-- Элементы с ID -->
    <div id="total_count">Null</div>
    <div id="sub2">Null</div>

    <script>
        //Страничное отображение с обновлением элеметов равных "timer"
        // setInterval(html_out, timer);
    </script>

</body>

</html>