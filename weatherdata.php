<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>ICCSIR | Reports</title>
    <link rel="icon" type="image/png" href="img/logo.png" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/xcharts.min.css" rel=" stylesheet">
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script>
        $(function () {
            $("#datepicker1").datepicker();
        });
    </script>
    <script>
        $(function () {
            $("#datepicker2").datepicker();
        });

        var showElem = document.getElementById("show");
        var user_m1 = document.getElementById("user_management");

       // showElem.onclick = function () {
       //     hideElem.style.display = 'none';
       // }

        //hideElem.onclick = function () {
        //    showElem.style.display = 'none';
        //}
    </script>
    <style>
        .button {
            background-color: lightgray;
            border: none;
            color: black;
            padding: 6px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button4 {
            border-radius: 12px;
        }
    </style>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
    <style type="text/css">
        .style1 {
            position: relative;
            left: 403px;
            top: 23px;
            width: 1px;
            height: 8px;
        }

        .text1 {
            color: gray;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            -webkit-transition-property: color, text;
            -webkit-transition-duration: 1s, 1s;
            -webkit-transition-timing-function: linear, ease-in;
            -moz-transition-property: color, text;
            -moz-transition-duration: 1s;
            -moz-transition-timing-function: linear, ease-in;
            -o-transition-property: color, text;
            -o-transition-duration: 1s;
            -o-transition-timing-function: linear, ease-in;
        }

            .text1:hover {
                color: white;
                font-size: 20px;
                font-weight: bold;
            }

        .btn-social {
            width: 80px;
            height: 50px;
            position: relative;
            opacity: 0.8;
            transition: 0.3s ease;
            cursor: pointer;
        }

            .btn-social:hover {
                transform: scale(1.4, 1.4);
                opacity: 1;
            }
    </style>
    <style type="text/css">
        .style27 {
        }

        .textbox {
            background: white;
            border: 1px double #DDD;
            border-radius: 5px;
            box-shadow: 0 0 5px #333;
            color: #666;
            outline: none;
            height: 25px;
            width: 140px;
        }

        .textbox12 {
            background: white;
            border: 1px double #DDD;
            border-radius: 5px;
            box-shadow: 0 0 5px #333;
            color: #666;
            outline: none;
            height: 28px;
            width: 140px;
        }

        .auto-style8 {
            width: 150px;
        }

        .auto-style9 {
            width: 150px;
        }

        .auto-style10 {
            width: 46px;
        }

        #main_nav {
    display: none;
}
    </style>
</head>

<body>
    <!-- container section start -->
    <section id="container" class="">


        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="http://www.iccsir.org/" class="logo">
                <img src="img/logo.png" width="55" height="40" />&nbsp;&nbsp;Indian Centre for Climate and Societal Impacts Research <span class="lite">(ICCSIR)</span></a>
            <!--logo end-->



            <div class="top-nav notification-row">
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">

                    <!-- task notificatoin end -->
                    <!-- inbox notificatoin start-->
                    <li id="mail_notificatoin_bar" class="dropdown">
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                            <span class="username">Admin</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="#"><i class="icon_profile"></i>My Profile</a>
                            </li>

                            <li>
                                <a href="index.html"><i class="icon_key_alt"></i>Log Out</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon_key_alt"></i>Documentation</a>
                            </li>

                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>
        <!--header end-->

        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">
                    <li>
                        <a class="" href="usermanagement.html">
                            <i class="icon_profile"></i>
                            <span>User Management</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="dashboard.php">
                            <i class="icon_house_alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="active">
                        <a class="" href="reports.html">
                            <i class="icon_document_alt"></i>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="chart_report.html">
                            <i class="icon_piechart"></i>
                            <span>Charts</span>
                        </a>

                    </li>
                    <li>
                        <a class="" href="helps.html">
                            <i class="icon_mail_alt"></i>
                            <span>Help</span>
                        </a>
                    </li>


                    <li>
                        <br />
                    </li>
                    <li>
                        <br />
                    </li>
                    <li>
                        <br />
                    </li>
                    <li>
                        <br />
                    </li>
                    <li>
                        <br />
                    </li>
                    <li>
                        <br />
                    </li>
                    <li>
                        <br />
                    </li>


                    <li>
                        <p class="text1">&nbsp;&nbsp;&nbsp;&nbsp;Enabled By -</p>
                    </li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/SmallLogo.jpg" class="btn-social" />
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->

        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <!--overview start-->
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header"><i class="fa fa-laptop"></i>Reports</h3>
                        <ol class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="dashboard.php">Home</a></li>
                            <li><i class="fa fa-laptop"></i>Reports</li>
                        </ol>
                    </div>
                </div>
              
			  <div class="row">
               <form id="Form1" runat="server">
                    <div class="col-md-12"> 
					<center>
  <table border="1" cellspacing="0" cellpadding="0" width="90%"> 
            <tr bgcolor="#999999" color="white"> 
                 
                <td> 
                    Date
                </td> 
                <td> 
                    Time
                </td> 
                <td> 
                    Station Name
                </td> 
				 <td> 
                    Temperature
                </td> 
                <td> 
                    Pressure
                </td> 
                <td> 
                    Humitdity
                </td> 
                <td> 
                    Windspeed
                </td> 
				<td> 
                    Winddirection
                </td> 
                <td> 
                    Rain
                </td> 
                <td> 
                    Solarradiation
                </td> 
			
            </tr> 
         <?php 
		
		$sdate = $_POST['sdate']; 
		$edate = $_POST['edate']; 
	
        $stationid = pg_escape_string($_POST['stationid']); 
      

		
		if ($stationid  == "80" or $stationid  == "82" or $stationid  == "83" or $stationid  == "84" or $stationid  == "86")
		{
		$db = pg_connect("host=localhost dbname=iccsir_database user=postgres password=123456 port = 5432");
		}
		else
		{
		$db = pg_connect("host=localhost dbname=agrocel_database user=postgres password=123456 port = 5432");
		}

        $query = "SELECT * from processed_data where date >= '".$sdate ."' and  date <= '".$edate ."' and stationid =  '".$stationid."' ORDER By date,time"; 
		
      
        $result = pg_query($query); 
        if (!$result) { 
            echo "Problem with query " . $query . "<br/>"; 
            echo pg_last_error(); 
            exit(); 
        } 

        while($myrow = pg_fetch_assoc($result)) { 
		
		$rain1 = $myrow['Rain'];
		if ($rain1=="167.894")
		{
		$rain2 = 0;
		}
		else
		{
		$rain2 = $rain1;
		}
		
		$sid =  $myrow['stationid'];
		 if ($sid == "80")
                  {
                      $sid1 =  "ICCSIR : Mandvi";
                  }
				 else if ($sid == "81")
                  {
                      $sid1 =  "Agrocel : Dhordo";
                  }
				  else if ($sid == "82")
                  {
                      $sid1 =  "VRTI : Roha";
                  }
				  else if ($sid == "83")
                  {
                      $sid1 =  "VRTI : Lote";
                  }
				   else if ($sid == "84")
                  {
                      $sid1 =  "Shishuvihar : Bhavnagar";
                  }
				    else if ($sid == "86")
                  {
                      $sid1 =  "UKSS : Wada";
                  }
				   
				  else 
				    {
					$sid1 =  "None";
					}
		
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
					  
					     $temp1 = number_format($myrow['temperature'], 2, '.', ','); 
	                     $pres1 = number_format($myrow['Pressure'], 2, '.', ',');
	                     $winds1 = number_format($myrow['Windspeed'], 0, '.', ',');
						 
		
		
            printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", htmlspecialchars($myrow['date']), htmlspecialchars($myrow['time']), htmlspecialchars(
		  $sid1), htmlspecialchars(
		  $temp1),htmlspecialchars($pres1), htmlspecialchars($myrow['Humitdity']),htmlspecialchars($winds1), htmlspecialchars($dir), htmlspecialchars(
		  $rain2),htmlspecialchars(
		  $myrow['Solarradiation']));
		 
        } 
        ?> 
        </table> </center>
 </div>
                  
    <!-- container section start -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js"></script>
    <!-- jQuery full calendar -->
    <script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>

        //knob
        $(function () {
            $(".knob").knob({
                'draw': function () {
                    $(this.i).val(this.cv + '%')
                }
            })
        });

        //carousel
        $(document).ready(function () {
            $("#owl-slider").owlCarousel({
                navigation: true,
                slideSpeed: 300,
                paginationSpeed: 400,
                singleItem: true

            });
        });

        //custom select box

        $(function () {
            $('select.styled').customSelect();
        });

        /* ---------- Map ---------- */
        $(function () {
            $('#map').vectorMap({
                map: 'world_mill_en',
                series: {
                    regions: [{
                        values: gdpData,
                        scale: ['#000', '#000'],
                        normalizeFunction: 'polynomial'
                    }]
                },
                backgroundColor: '#eef3f7',
                onLabelShow: function (e, el, code) {
                    el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                }
            });
        });
    </script>
</body>
</html>
