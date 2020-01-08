var city=prompt("enter city name",city);
$.getJSON("https://api.openweathermap.org/data/2.5/weather?q="+city+"&units=imperial&APPID=020990759be9838e00c03fe0f7c702bb",
	function(data){
	console.log(data);
	var image = "https://api.openweathermap.org/img/w/"+data.weather[0].icon+".png";
    $('.img').attr('src',image);
    var temp = data.main.temp;
     temp=Math.floor((temp-32)*(5/9));
    $('.descrip').append("Temperature: "+temp+'&#8451;');
    var d=data.weather[0].description;
    var hum = data.main.humidity;
    $('.humidity').append("Humidity: " +hum + "%");
    var ws = data.wind.speed;
    $('.wind').append("Wind speed: " +ws+ " km/hr");
    $('.cmt').append(d);
});

