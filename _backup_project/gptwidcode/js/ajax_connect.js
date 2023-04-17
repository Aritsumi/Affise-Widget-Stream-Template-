var vol_obj ={ // создаем экземпляр объекта
 
    // задаем свойства объекта
    updInterval: 10000, // 10 сек. - интервал времени между запросами
    url: 'https://api-admachina.affise.com/3.0/stats/conversions?API-Key=8c7dbc24215a9fe8f09979edcde633b0&date_from=2023-01-01&date_to=2048-03-09&subid2=test2&limit=1&device=desktop&offer=3725', // скрипт который должен отвечать на Ajax запросы
    init: function(){
        var self = vol_obj;
        setInterval($.proxy(vol_obj.requestData, self), self.updInterval);
    },
      
    requestData: function(){
        var self = vol_obj;
          
        // ajax запрос посредством JQuery
        $.ajax({
            url: self.url,
            type: 'GET',
            dataType: 'json',
            success: function(data){ self.update(data) },
            error: function(data){ self.error(data) },
        });
    },
          
    // метод принимает ответ на Ajax запрос
    update: function(Data){
        var self = vol_obj;
        console.log(Data);
        // тут можно дописать логику после получения данных
    },
     
    // метод для обработки ошибок
    error: function(Data){
        var self = vol_obj;
        console.log('Failed to get data');
    },
    }