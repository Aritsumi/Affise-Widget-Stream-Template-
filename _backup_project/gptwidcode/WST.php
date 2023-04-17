<!--
Name: Affise "Widget Stream Template"         
-------------------------------------------------
Project: Afi-WST [v1.12.44]                     
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

        $.ajax(settings).done(
            function ajax_out(response) {
                console.clear();
                console.log(response); // В консоль отображаеться ответ
                var wgt = response;
            });

        //HTML ОТБРАЖЕНИЕ
        function html_out() {
            //Импорт переменных из PHP результата
            var console = <? echo $DTTC ?>;

            //НАСТРОЙКА ПЕРЕМЕНЫХ В ОТДЕЛЬНЫЕ ЭЛЕМЕНТЫ
            var total_count = wgt.pagination.total_count;
            // var sub2 = inference.conversions[44].sub2;

            // Примеры для прописывания новых элементов:
            // var НАЗВАНИЕ_ЭЛЕМЕНТА = inference.ЭЛЕМЕНТ
            // var НАЗВАНИЕ_ЭЛЕМЕНТА = inference.ДЕРИКТОРИЯ.ЭЛЕМЕНТ

            //Замена "_" на значение элемента.
            // document.getElementById("sub2").innerHTML = sub2;
            document.getElementById("total_count").innerHTML = total_count;
            // Примеры для прописывания новых элементов:
            // 
            // 
        };
    </script>

    <!-- Элементы с ID -->
    <div id="total_count">Null</div>
    <div id="sub2">Null</div>

    <script>
        //Консольное отображение с обновлением данных равных "timer"
        setInterval(ajax_out, timer);
        //Страничное отображение с обновлением элеметов равных "timer"
        setInterval(html_out, timer);
    </script>

</body>

</html>