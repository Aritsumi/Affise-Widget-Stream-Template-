<?php
    //Коннект API [php method]
    $ch = curl_init();

    // После "?API-Key=" Вставить ключь!
    curl_setopt($ch, CURLOPT_URL, 'https://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0');

    //Метод потключения 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    //Результат страницы в переменую PHP
    $DTTC = curl_exec($ch); //DTTC - Direct Text To Console [Прямой текст на консоль]

    curl_close($ch);
?>