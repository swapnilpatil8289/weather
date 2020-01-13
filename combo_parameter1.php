<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Weather Data for ICCSIR</title>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Weather Data for Iccsir'
        },
        subtitle: {
            text: 'Source: ws.avvrongreen.co.in'
        },
        xAxis: [{
            categories: [<?php 
		
		$sdate = $_POST['sdate']; 
		$edate = $_POST['edate']; 
	
       $stationid = pg_escape_string($_POST['stationid']); 
      
		
		
        $db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");

        $query = "SELECT * from processed_data where date >= '".$sdate ."' and  date <= '".$edate ."' and stationid =  '".$stationid."' ORDER By date,time"; 
	//	$query = "SELECT * from processed_data where date >= '2016-03-01' and  date <= '2016-04-01' ORDER By date,time ";
      
        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
		 ?>
          '<?php echo $myrow["date_and_time"] ?>',
		  <?php
		  }
		  ?>],
            crosshair: true
        }],
		
		
		
                yAxis: [{ // Primary yAxis 
				
				min : 980,
            labels: {
			
                format: '{value} ',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            title: {
               // text: 'Pressure ( hpa )',
				text: '',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true

        }, { // Secondary yAxis
            gridLineWidth: 0,

            title: {
               // text: 'Temperature (°C )',
				text: '',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }

        }, { // Tertiary yAxis
            gridLineWidth: 0,
            title: {
                //text: 'Humidity ( % )',
				text: '',
                style: {
                    color: Highcharts.getOptions().colors[2]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[2]
                }
            },
            opposite: true
        },
		
		 { // Secondary yAxis
			gridLineWidth: 0,
            title: {
                //text: 'Solar Radiation (W/m2)',
				text: '',
                style: {
                    color: Highcharts.getOptions().colors[5]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[5]
                }
            }

        }
		
		,
		
		
		
		{ // Tertiary yAxis
            gridLineWidth: 0,
            title: {
                //text: 'WindSpeed ( Km/h)',
				text: '',
                style: {
                    color: Highcharts.getOptions().colors[3]
                }
            },
            labels: {
                format: '{value}',
                style: {
                    color: Highcharts.getOptions().colors[3]
                }
            },
            opposite: true
        }
		
		],
		
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 90,
            verticalAlign: 'top',
            y: 70,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Rainfall (mm)',
            type: 'column',
            yAxis: 1,
            data: [<?php 
		
		$sdate = $_POST['sdate']; 
		$edate = $_POST['edate']; 
	
       $stationid = pg_escape_string($_POST['stationid']); 
      
		
		
        $db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
		
        $query = "SELECT \"Rain\" from processed_data where date >= '".$sdate ."' and  date <= '".$edate ."' and stationid =  '".$stationid."' ORDER By date,time"; 
		//$query = "SELECT * from processed_data where date >= '2016-03-01' and  date <= '2016-04-01' ORDER By date,time";
      
        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
		 ?>
          <?php echo $myrow["Rain"] ?>,
		  <?php
		  }
		  
		  ?>],
            tooltip: {
                valueSuffix: ' mm'
            }

        }, 
		 {
            name: 'Temperature (°C )',
            type: 'spline',
			yAxis: 1,
			data: [<?php 
		
		$sdate = $_POST['sdate']; 
		$edate = $_POST['edate']; 
	
       $stationid = pg_escape_string($_POST['stationid']); 
      
		
		
        $db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
		
        $query = "SELECT * from processed_data where date >= '".$sdate ."' and  date <= '".$edate ."' and stationid =  '".$stationid."' ORDER By date,time"; 
		//$query = "SELECT * from processed_data where date >= '2016-03-01' and  date <= '2016-04-01' ORDER By date,time";
      
        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
		 ?>
          <?php echo $myrow["temperature"] ?>,
		  <?php
		  }
		  
		  ?>],
            tooltip: {
                valueSuffix: ' °C'
            }
        }, {
            name: 'Humidity ( % )',
            type: 'spline',
		yAxis: 2,
            data: [<?php 
		
		$sdate = $_POST['sdate']; 
		$edate = $_POST['edate']; 
	
       $stationid = pg_escape_string($_POST['stationid']); 
      
		
		
        $db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
		
        $query = "SELECT * from processed_data where date >= '".$sdate ."' and  date <= '".$edate ."' and stationid =  '".$stationid."' ORDER By date,time"; 
		//$query = "SELECT * from processed_data where date >= '2016-03-01' and  date <= '2016-04-01' ORDER By date,time";
      
        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
		 ?>
          <?php echo $myrow["Humitdity"] ?>,
		  <?php
		  }
		  
		  ?>],
            tooltip: {
                valueSuffix: ' %'
            }
        },  {
            name: 'Windspeed (Km/Hr)',
            type: 'spline',
			yAxis: 4,
			
            data: [<?php 
		
		$sdate = $_POST['sdate']; 
		$edate = $_POST['edate']; 
	
       $stationid = pg_escape_string($_POST['stationid']); 
      
		
		
        $db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
		
        $query = "SELECT * from processed_data where date >= '".$sdate ."' and  date <= '".$edate ."' and stationid =  '".$stationid."' ORDER By date,time"; 
		//$query = "SELECT * from processed_data where date >= '2016-03-01' and  date <= '2016-04-01' ORDER By date,time";
      
        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
		 ?>
          <?php echo $myrow["Windspeed"] ?>,
		  <?php
		  }
		  
		  ?>],
            tooltip: {
                valueSuffix: ' Km/Hr'
            }
        },
		{
            name: 'Pressure (hpa)',
            type: 'spline',
            yAxis: 0,
            data: [<?php 
		
		$sdate = $_POST['sdate']; 
		$edate = $_POST['edate']; 
	
       $stationid = pg_escape_string($_POST['stationid']); 
      
		
		
        $db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
		
        $query = "SELECT * from processed_data where date >= '".$sdate ."' and  date <= '".$edate ."' and stationid =  '".$stationid."' ORDER By date,time"; 
		//$query = "SELECT * from processed_data where date >= '2016-03-01' and  date <= '2016-04-01' ORDER By date,time";
      
        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
		 ?>
          <?php echo $myrow["Pressure"] ?>,
		  <?php
		  }
		  
		  ?>],
            marker: {
                enabled: false
            },
            dashStyle: 'shortdot',
            tooltip: {
                valueSuffix: ' hpa'
            }

        },
		
		{
            name: 'Solarradiation (W/m2)',
            type: 'spline',
			yAxis: 3,
            data: [<?php 
		
		$sdate = $_POST['sdate']; 
		$edate = $_POST['edate']; 
	
       $stationid = pg_escape_string($_POST['stationid']); 
      
		
		
        $db = pg_connect("host=localhost dbname=iccsir_database  user=postgres password=123456 port = 5432");
		
        $query = "SELECT * from processed_data where date >= '".$sdate ."' and  date <= '".$edate ."' and stationid =  '".$stationid."' ORDER By date,time"; 
		//$query = "SELECT * from processed_data where date >= '2016-03-01' and  date <= '2016-04-01' ORDER By date,time";
      
        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
		 ?>
          <?php echo $myrow["Solarradiation"] ?>,
		  <?php
		  }
		  
		  ?>],
            tooltip: {
                valueSuffix: ' W/m2'
            }
        }]
    });
});


		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 400px; height: 480px; margin: 0 auto"></div>

	</body>
</html>
