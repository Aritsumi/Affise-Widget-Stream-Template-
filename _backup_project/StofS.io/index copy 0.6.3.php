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

    <?php //Коннект API [php method]

    // URL-адрес, на который будет выполнен запрос
    // После "?API-Key=" Вставить ключь!
    $url = 'https://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0';

    // Интервал времени (в секундах) между повторными запросами
    $interval = 5;

    // Функция, которая будет вызываться для обработки ответа сервера
    function processResponse($DTTC)
    {
        //Из php, строка "DTTC" в переменную JS
        echo ' <script> console.clear();';
        echo 'console.log(';
        print_r($DTTC);
        echo '); </script> ';





        
    }

    while (true) {
        // Создание экземпляра cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);

        //Метод потключения 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        // Выполнение запроса и получение ответа
        $DTTC = curl_exec($ch);

        // Закрытие соединения cURL
        curl_close($ch);

        // Обработка ответа сервера
        processResponse($DTTC);

        // Ожидание до следующего запроса
        sleep($interval);
    };
    ?>

    <script>
        //Из php, строка "DTTC" в переменную JS
        var console = <?php print_r($DTTC) ?>;

        //Переменные подкатологов API
        var total_count = console.pagination.total_count;
        // Примеры для прописывания новых элементов:
        // var НАЗВАНИЕ_ЭЛЕМЕНТА = console.ДЕРИКТОРИЯ.САМ_ЭЛЕМЕНТ
        // var НАЗВАНИЕ_ЭЛЕМЕНТА = console.САМ_ЭЛЕМЕНТ
    </script>

    <!-- Элементы с ID -->
    <div id="total_count">_</div>
    <div id="sub2">_</div>

    <script>
        function html_update() {
            //Замена "_" на значение элемента.
            document.getElementById("sub2").innerHTML = sub2;
            document.getElementById("total_count").innerHTML = total_count;
        };
        // [Test]:Aвтообновление
        window.setTimeout(html_update, 7500);
    </script>
</body>

</html>

<!-- 


 -->