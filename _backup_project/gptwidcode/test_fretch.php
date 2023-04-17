<!DOCTYPE html>
<html>
  <head>
    <title>Авто-запрос с таймером через JSON</title>
    <script>
      // Функция отправки запроса JSON
      function sendRequest() {

        var url = "https://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0&date_from=2023-01-01&date_to=2048-03-09&subid2=test3&limit=1&device=desktop&offer=3725";

        var xhr = new XMLHttpRequest();
        xhr.open("GET", url, true);
        xhr.onload = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            console.clear();
            var response = JSON.parse(xhr.responseText);
            console.log(response);
            document.getElementById("total_count").innerHTML = response.pagination.total_count;
            document.getElementById("response").innerHTML = response;
          }
        };
        xhr.send();
      }
      
      // Функция запуска таймера и запроса JSON
      function startTimer() {
        setInterval(function() {
          sendRequest();
        }, 5000); // 5000 мс - интервал времени между запросами
      }
    </script>
  </head>
  <body onload="startTimer();">
    <h3>Авто-запрос с таймером через JSON</h3>
    <div id="total_count">total_count</div>
    <div id="response">response</div>
  </body>
</html>