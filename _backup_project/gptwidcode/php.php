<?php
$url = 'https://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0&date_from=2023-01-01&date_to=2048-03-09&subid2=test2&limit=1&device=desktop&offer=3725';

$cache_time = 10; // время кэша в секундах
header('Cache-Control: public, max-age=' . $cache_time); // устанавливаем заголовок кэша

if (!isset($_SERVER['HTTP_IF_MODIFIED_SINCE']) || strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) < time() - $cache_time) {
    // если данные не были запрошены ранее или время истекло, выполним запрос cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    // устанавливаем заголовок последнего изменения
    header('Last-Modified: ' . gmdate('D, d M Y H:i:s T', time()));
    // выводим данные
    
    echo '<p>',$data,'</p>';
    echo '<script> console.log(',$data,') </script>';
} else {
    // если данные были запрошены ранее и время не истекло, отправляем клиенту заголовок Not Modified
    header('HTTP/1.1 304 Not Modified');
}

