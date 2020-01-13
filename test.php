<!DOCTYPE html>
<html>
  <head>
    <style>
       #map {
        height: 700px;
        width: 100%;
       }
    </style>
  </head>
  <body>
    
	<style>
   #wrapper { position: relative; }
   #over_map { position: absolute; top: 460px; left: 50px; z-index: 99; }
</style>

<div id="wrapper">
  <div id="map"></div>
   <div id="over_map">
<img src="img/SmallLogo.png" height="120" width="220"/><br/>
<p align="center"><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="dashboard.php">Home</a></h2></p>
   </div>
</div>
	
	
    <script>
      function initMap() {
        var center1 = {lat: 19.901054, lng: 75.352478};
        var mandvi = {lat: 22.833334, lng: 69.3554783};
        var agrocel = {lat: 23.733732, lng: 69.859741};
        var roha = {lat: 18.439472, lng: 73.118263};
        var lote = {lat: 17.532310, lng: 73.517792};
        var bhavnagar = {lat: 21.7449519, lng: 72.1282753};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: center1
        });

        var marker = new google.maps.Marker({
          position: mandvi,
          map: map,
          title: '<?php 
$db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
//$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data) and stationid='82'"; 
$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data where stationid = '80') and stationid = '80'"; 
 $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 
   while($myrow = pg_fetch_assoc($result)) { 
			     $winddir =  $myrow['Winddirection'];
				  if ($winddir >= 0 && $winddir <= 11.25)
                  {
                      $dir =  "North";
                  }
                  else if ($winddir > 11.25 && $winddir <= 33.75)
                  {
                      $dir = "NNE";
                  }
                  else if ($winddir > 33.75 && $winddir <= 56.25)
                  {
                      $dir = "NE";
                  }
                  else if ($winddir > 56.25 && $winddir <= 78.25)
                  {
                      $dir =  "ENE";
                  }
                  else if ($winddir > 78.25 && $winddir <= 101.25)
                  {
                      $dir = "East";
                  }
                  else if ($winddir > 101.25 && $winddir <= 123.25)
                  {
                      $dir = "ESE";
                  }
                  else if ($winddir > 123.25 && $winddir <= 146.25)
                  {
                      $dir = "SE";
                  }
                  else if ($winddir > 146.25 && $winddir <= 168.25)
                  {
                      $dir = "SSE";
                  }
                  else if ($winddir > 168.25 && $winddir <= 191.25)
                  {
                      $dir = "South";
                  }
                  else if ($winddir > 191.25 && $winddir<= 213.75)
                  {
                      $dir = "SSW";
                  }
                  else if ($winddir> 213.75 && $winddir <= 236.25)
                  {
                      $dir = "SW";
                  }
                  else if ($winddir > 236.25 && $winddir <= 258.75)
                  {
                      $dir = "WSW";
                  }
                  else if ($winddir > 258.75 && $winddir <= 281.25)
                  {
                      $dir = "West";
                  }
                  else if ($winddir > 281.25 && $winddir <= 303.75)
                  {
                      $dir = "WNW";
                  }
                  else if ($winddir > 303.75 && $winddir <= 326.25)
                  {
                      $dir = "NW";
                  }
                  else if ($winddir > 326.25 && $winddir <= 348.75)
                  {
                      $dir = "NNW";
                  }
                  else if ($winddir > 348.75 && $winddir <= 360)
                  {
                      $dir = "North";
                  }
                  else if ($winddir == 0)
                  {
                      $dir = "NORTH";
                  }
                  else
                      $dir = "INVALID";

			  
echo "Station Name   -   ICCSIR : Mandvi ";
echo '\n';
echo "Date Time  -  ".$myrow['date_and_time'];
echo '\n';
echo("Temperature  - ".number_format($myrow['temperature'], 2, '.', ',')."  C");
echo '\n';
echo("Humidity  - ".$myrow['Humitdity']." %");
echo '\n';
echo("Pressure  - ".number_format($myrow['Pressure'], 2, '.', ',')."  hpa");  
echo '\n';
echo("Windspeed - ".number_format($myrow['Windspeed'], 0, '.', ',')."  km/h");  
echo '\n';
echo("Wind Direction -  ".$dir);
echo '\n';
echo("Rain  - ".$myrow['Rain']."  mm");
echo '\n';
echo("Solarradiation   - ".$myrow['Solarradiation']."  W/m2");
}
?>'
        });
 var marker = new google.maps.Marker({
          position: agrocel,
          map: map,
          title: '<?php 
$db = pg_connect("host=localhost dbname=agrocel_database  user=postgres password=123456 port = 5432");
//$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data) and stationid='82'"; 
$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data where stationid = '81') and stationid = '81'"; 
 $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 
   while($myrow = pg_fetch_assoc($result)) { 
			     $winddir =  $myrow['Winddirection'];
				  if ($winddir >= 0 && $winddir <= 11.25)
                  {
                      $dir =  "North";
                  }
                  else if ($winddir > 11.25 && $winddir <= 33.75)
                  {
                      $dir = "NNE";
                  }
                  else if ($winddir > 33.75 && $winddir <= 56.25)
                  {
                      $dir = "NE";
                  }
                  else if ($winddir > 56.25 && $winddir <= 78.25)
                  {
                      $dir =  "ENE";
                  }
                  else if ($winddir > 78.25 && $winddir <= 101.25)
                  {
                      $dir = "East";
                  }
                  else if ($winddir > 101.25 && $winddir <= 123.25)
                  {
                      $dir = "ESE";
                  }
                  else if ($winddir > 123.25 && $winddir <= 146.25)
                  {
                      $dir = "SE";
                  }
                  else if ($winddir > 146.25 && $winddir <= 168.25)
                  {
                      $dir = "SSE";
                  }
                  else if ($winddir > 168.25 && $winddir <= 191.25)
                  {
                      $dir = "South";
                  }
                  else if ($winddir > 191.25 && $winddir<= 213.75)
                  {
                      $dir = "SSW";
                  }
                  else if ($winddir> 213.75 && $winddir <= 236.25)
                  {
                      $dir = "SW";
                  }
                  else if ($winddir > 236.25 && $winddir <= 258.75)
                  {
                      $dir = "WSW";
                  }
                  else if ($winddir > 258.75 && $winddir <= 281.25)
                  {
                      $dir = "West";
                  }
                  else if ($winddir > 281.25 && $winddir <= 303.75)
                  {
                      $dir = "WNW";
                  }
                  else if ($winddir > 303.75 && $winddir <= 326.25)
                  {
                      $dir = "NW";
                  }
                  else if ($winddir > 326.25 && $winddir <= 348.75)
                  {
                      $dir = "NNW";
                  }
                  else if ($winddir > 348.75 && $winddir <= 360)
                  {
                      $dir = "North";
                  }
                  else if ($winddir == 0)
                  {
                      $dir = "NORTH";
                  }
                  else
                      $dir = "INVALID";

			  
echo "Station Name   -   Agrocel : Dhrodo";
echo '\n';
echo "Date Time  -  ".$myrow['date_and_time'];
echo '\n';
echo("Temperature  - ".number_format($myrow['temperature'], 2, '.', ',')."  C");
echo '\n';
echo("Humidity  - ".$myrow['Humitdity']." %");
echo '\n';
echo("Pressure  - ".number_format($myrow['Pressure'], 2, '.', ',')."  hpa");  
echo '\n';
echo("Windspeed - ".number_format($myrow['Windspeed'], 0, '.', ',')."  km/h");  
echo '\n';
echo("Wind Direction -  ".$dir);
echo '\n';
echo("Rain  - ".$myrow['Rain']."  mm");
echo '\n';
echo("Solarradiation   - ".$myrow['Solarradiation']."  W/m2");
}
?>'
        });
 var marker = new google.maps.Marker({
          position: roha,
          map: map,
          title: '<?php 
$db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
//$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data) and stationid='82'"; 
$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data where stationid = '82') and stationid = '82'"; 
 $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 
   while($myrow = pg_fetch_assoc($result)) { 
			     $winddir =  $myrow['Winddirection'];
				  if ($winddir >= 0 && $winddir <= 11.25)
                  {
                      $dir =  "North";
                  }
                  else if ($winddir > 11.25 && $winddir <= 33.75)
                  {
                      $dir = "NNE";
                  }
                  else if ($winddir > 33.75 && $winddir <= 56.25)
                  {
                      $dir = "NE";
                  }
                  else if ($winddir > 56.25 && $winddir <= 78.25)
                  {
                      $dir =  "ENE";
                  }
                  else if ($winddir > 78.25 && $winddir <= 101.25)
                  {
                      $dir = "East";
                  }
                  else if ($winddir > 101.25 && $winddir <= 123.25)
                  {
                      $dir = "ESE";
                  }
                  else if ($winddir > 123.25 && $winddir <= 146.25)
                  {
                      $dir = "SE";
                  }
                  else if ($winddir > 146.25 && $winddir <= 168.25)
                  {
                      $dir = "SSE";
                  }
                  else if ($winddir > 168.25 && $winddir <= 191.25)
                  {
                      $dir = "South";
                  }
                  else if ($winddir > 191.25 && $winddir<= 213.75)
                  {
                      $dir = "SSW";
                  }
                  else if ($winddir> 213.75 && $winddir <= 236.25)
                  {
                      $dir = "SW";
                  }
                  else if ($winddir > 236.25 && $winddir <= 258.75)
                  {
                      $dir = "WSW";
                  }
                  else if ($winddir > 258.75 && $winddir <= 281.25)
                  {
                      $dir = "West";
                  }
                  else if ($winddir > 281.25 && $winddir <= 303.75)
                  {
                      $dir = "WNW";
                  }
                  else if ($winddir > 303.75 && $winddir <= 326.25)
                  {
                      $dir = "NW";
                  }
                  else if ($winddir > 326.25 && $winddir <= 348.75)
                  {
                      $dir = "NNW";
                  }
                  else if ($winddir > 348.75 && $winddir <= 360)
                  {
                      $dir = "North";
                  }
                  else if ($winddir == 0)
                  {
                      $dir = "NORTH";
                  }
                  else
                      $dir = "INVALID";

			  
echo "Station Name   -   VRTI : Roha ";
echo '\n';
echo "Date Time  -  ".$myrow['date_and_time'];
echo '\n';
echo("Temperature  - ".number_format($myrow['temperature'], 2, '.', ',')."  C");
echo '\n';
echo("Humidity  - ".$myrow['Humitdity']." %");
echo '\n';
echo("Pressure  - ".number_format($myrow['Pressure'], 2, '.', ',')."  hpa");  
echo '\n';
echo("Windspeed - ".number_format($myrow['Windspeed'], 0, '.', ',')."  km/h");  
echo '\n';
echo("Wind Direction -  ".$dir);
echo '\n';
echo("Rain  - ".$myrow['Rain']."  mm");
echo '\n';
echo("Solarradiation   - ".$myrow['Solarradiation']."  W/m2");
}
?>'
        });

 var marker = new google.maps.Marker({
          position: lote,
          map: map,
          title: '<?php 
$db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
//$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data) and stationid='82'"; 
$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data where stationid = '83') and stationid = '83'"; 
 $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 
   while($myrow = pg_fetch_assoc($result)) { 
			     $winddir =  $myrow['Winddirection'];
				  if ($winddir >= 0 && $winddir <= 11.25)
                  {
                      $dir =  "North";
                  }
                  else if ($winddir > 11.25 && $winddir <= 33.75)
                  {
                      $dir = "NNE";
                  }
                  else if ($winddir > 33.75 && $winddir <= 56.25)
                  {
                      $dir = "NE";
                  }
                  else if ($winddir > 56.25 && $winddir <= 78.25)
                  {
                      $dir =  "ENE";
                  }
                  else if ($winddir > 78.25 && $winddir <= 101.25)
                  {
                      $dir = "East";
                  }
                  else if ($winddir > 101.25 && $winddir <= 123.25)
                  {
                      $dir = "ESE";
                  }
                  else if ($winddir > 123.25 && $winddir <= 146.25)
                  {
                      $dir = "SE";
                  }
                  else if ($winddir > 146.25 && $winddir <= 168.25)
                  {
                      $dir = "SSE";
                  }
                  else if ($winddir > 168.25 && $winddir <= 191.25)
                  {
                      $dir = "South";
                  }
                  else if ($winddir > 191.25 && $winddir<= 213.75)
                  {
                      $dir = "SSW";
                  }
                  else if ($winddir> 213.75 && $winddir <= 236.25)
                  {
                      $dir = "SW";
                  }
                  else if ($winddir > 236.25 && $winddir <= 258.75)
                  {
                      $dir = "WSW";
                  }
                  else if ($winddir > 258.75 && $winddir <= 281.25)
                  {
                      $dir = "West";
                  }
                  else if ($winddir > 281.25 && $winddir <= 303.75)
                  {
                      $dir = "WNW";
                  }
                  else if ($winddir > 303.75 && $winddir <= 326.25)
                  {
                      $dir = "NW";
                  }
                  else if ($winddir > 326.25 && $winddir <= 348.75)
                  {
                      $dir = "NNW";
                  }
                  else if ($winddir > 348.75 && $winddir <= 360)
                  {
                      $dir = "North";
                  }
                  else if ($winddir == 0)
                  {
                      $dir = "NORTH";
                  }
                  else
                      $dir = "INVALID";

			  
echo "Station Name   -   VRTI : Lote ";
echo '\n';
echo "Date Time  -  ".$myrow['date_and_time'];
echo '\n';
echo("Temperature  - ".number_format($myrow['temperature'], 2, '.', ',')."  C");
echo '\n';
echo("Humidity  - ".$myrow['Humitdity']." %");
echo '\n';
echo("Pressure  - ".number_format($myrow['Pressure'], 2, '.', ',')."  hpa");  
echo '\n';
echo("Windspeed - ".number_format($myrow['Windspeed'], 0, '.', ',')."  km/h");  
echo '\n';
echo("Wind Direction -  ".$dir);
echo '\n';
echo("Rain  - ".$myrow['Rain']."  mm");
echo '\n';
echo("Solarradiation   - ".$myrow['Solarradiation']."  W/m2");
}
?>'
        });
 var marker = new google.maps.Marker({
          position: bhavnagar,
          map: map,
         title: '<?php 
$db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
//$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data) and stationid='82'"; 
$query = "SELECT * from processed_data where id = (SELECT max(id) from processed_data where stationid = '84') and stationid = '84'"; 
 $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 
   while($myrow = pg_fetch_assoc($result)) { 
			     $winddir =  $myrow['Winddirection'];
				  if ($winddir >= 0 && $winddir <= 11.25)
                  {
                      $dir =  "North";
                  }
                  else if ($winddir > 11.25 && $winddir <= 33.75)
                  {
                      $dir = "NNE";
                  }
                  else if ($winddir > 33.75 && $winddir <= 56.25)
                  {
                      $dir = "NE";
                  }
                  else if ($winddir > 56.25 && $winddir <= 78.25)
                  {
                      $dir =  "ENE";
                  }
                  else if ($winddir > 78.25 && $winddir <= 101.25)
                  {
                      $dir = "East";
                  }
                  else if ($winddir > 101.25 && $winddir <= 123.25)
                  {
                      $dir = "ESE";
                  }
                  else if ($winddir > 123.25 && $winddir <= 146.25)
                  {
                      $dir = "SE";
                  }
                  else if ($winddir > 146.25 && $winddir <= 168.25)
                  {
                      $dir = "SSE";
                  }
                  else if ($winddir > 168.25 && $winddir <= 191.25)
                  {
                      $dir = "South";
                  }
                  else if ($winddir > 191.25 && $winddir<= 213.75)
                  {
                      $dir = "SSW";
                  }
                  else if ($winddir> 213.75 && $winddir <= 236.25)
                  {
                      $dir = "SW";
                  }
                  else if ($winddir > 236.25 && $winddir <= 258.75)
                  {
                      $dir = "WSW";
                  }
                  else if ($winddir > 258.75 && $winddir <= 281.25)
                  {
                      $dir = "West";
                  }
                  else if ($winddir > 281.25 && $winddir <= 303.75)
                  {
                      $dir = "WNW";
                  }
                  else if ($winddir > 303.75 && $winddir <= 326.25)
                  {
                      $dir = "NW";
                  }
                  else if ($winddir > 326.25 && $winddir <= 348.75)
                  {
                      $dir = "NNW";
                  }
                  else if ($winddir > 348.75 && $winddir <= 360)
                  {
                      $dir = "North";
                  }
                  else if ($winddir == 0)
                  {
                      $dir = "NORTH";
                  }
                  else
                      $dir = "INVALID";

			  
echo "Station Name   -    Shishuvihar :  Bhavnagar";
echo '\n';
echo "Date Time  -  ".$myrow['date_and_time'];
echo '\n';
echo("Temperature  - ".number_format($myrow['temperature'], 2, '.', ',')."  C");
echo '\n';
echo("Humidity  - ".$myrow['Humitdity']." %");
echo '\n';
echo("Pressure  - ".number_format($myrow['Pressure'], 2, '.', ',')."  hpa");  
echo '\n';
echo("Windspeed - ".number_format($myrow['Windspeed'], 0, '.', ',')."  km/h");  
echo '\n';
echo("Wind Direction -  ".$dir);
echo '\n';
echo("Rain  - ".$myrow['Rain']."  mm");
echo '\n';
echo("Solarradiation   - ".$myrow['Solarradiation']."  W/m2");
}
?>'
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTCd7VtvnJNhQ8bd66k4WA6MEEB9jGmeM&callback=initMap">
    </script>
	
  </body>
</html>