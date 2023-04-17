<?php

$url_api_php = ['http://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0&date_from=2023-01-01&date_to=2048-03-09&subid2=test&status=1&limit=1&device=desktop&offer=3725'];
$TIMEOUT = 10; //Таймер на запрос в секундах

$DTTC = [];

foreach ($url_api_php as $url_api_php) {
    $ch = curl_init();

    // После "?API-Key=" Вставить ключь!

    // Метод потключения 
    curl_setopt($ch, CURLOPT_URL, $url_api_php);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

    // Timeout in seconds
    curl_setopt($ch, CURLOPT_TIMEOUT, $TIMEOUT);

    //DTTC - Direct Text To Console [Прямой текст на консоль]
    $DTTC = curl_exec($ch);

    curl_close($ch);
};

var_dump($DTTC);
?>