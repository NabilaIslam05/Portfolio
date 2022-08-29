<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Weather Update-(Nabila Islam)</title>
		<!-- fonts-->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body class="header-collapse">
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<!-- <img src="dummy/logo.png" alt="Site Title"> -->
						<i class="fa fa-sun-o" style="font-size:40px;color:red"></i><i class="material-icons" style="font-size:42px;color:red;">cloud</i> <i class="fa fa-moon-o" style="font-size:40px;color:red"></i>



						<small class="site-description" style="color:orangered;font-size: 30px;" >WeatherForecast</small>

					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item" style="font-size:30px"><a href="index.html">Home</a></li>
						
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<div class="hero">
				<div class="slider">
					<ul class="slides">
						<li class="lazy-bg"data-background="dummy/slide-1.jpg">
							<div class="container">
								<h2 class="slide-title">W E A T H E R  <br>  F O R E C A S T</h2>
								<h3 class="slide-subtitle" style="color:white;">Get to know today's weather<br> 						<i class="fa fa-sun-o" style="font-size:50px;color:white;"></i><i class="material-icons" style="font-size:52px;color:white;">cloud</i> <i class="fa fa-moon-o" style="font-size:50px;color:white;"></i>
</h3>
								<p class="slide-desc"></p>

								<a href="#" class="button cut-corner">Read more</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="dummy/slide-2.jpg">
							<div class="container">
									<h2 class="slide-title">Weather Forecast</h2>

								<h3 class="slide-subtitle" style="color:white;">Get to know today's weather<br> 					
									<i class="fa fa-sun-o" style="font-size:50px;color:white;"></i>
									<p class="slide-desc"></p></h3>

									<a href="#" class="button cut-corner">Read More</a>
							</div>
						</li>
						<li class="lazy-bg" data-background="dummy/slide-3.jpg">
							<div class="container">
									<h2 class="slide-title">D H A K A <br> Weather
									</h2>

								<h3 class="slide-subtitle" style="color:white;">Get to know today's weather<br> <i class="fa fa-moon-o" style="font-size:50px;color:white;"></i></h3>


									
									<p class="slide-desc"></p>

									<a href="#" class="button cut-corner">Read More</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<main class="main-content">
				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<div class="quote-slider">
							<ul class="slides">
								<li>
									<blockquote>



										<p><i class="fa fa-cloud" style="font-size:35px;color:red;"></i><i class="fa fa-sun-o" style="font-size:40px;color:red"></i>

<?php

$url="https://api.openweathermap.org/data/2.5/forecast?q=Dhaka&units=metric&appid=c5418fccf24b18ce4b0cba8ffc76806a";
$theme= file_get_contents($url);
$weather= json_decode($theme);
// $today= date("j M ");
$tempp= $weather->list{1}->main->temp;
$cloudd = $weather->list{1}->weather{0}->main;

 $todayvalue = date("j F");
echo $todayvalue;
//echo $today;

?>
<h2>Today's current weather is </h2>

<?php
echo "Tempereture : ".$tempp."&deg;<br>";
                                  echo "Comfort Level : " .$cloudd."<br>";


?>
<h2>Dhaka,Bangladesh</h2>

										</p>
										<cite>Nabila Islam</cite>
										<span>Weather Reporter</span>
									</blockquote>
								</li>
								<li>
									<blockquote>


										<p><i class="fa fa-cloud" style="font-size:35px;color:red;"></i><i class="fa fa-moon-o" style="font-size:40px;color:red"></i>


										</p>
										<cite>Nabila Islam</cite>
										<span>Weather Reporter</span>
									</blockquote>
								</li>
							</ul>
						</div>
					</div>
				</div> 

				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
							<h2 class="section-title" style="color:sienna">Weather Updates for next 5 days </h2>


							<div class="event-nav">
								<a class="prev" id="event-prev" href="#"><i class="fa fa-caret-left"></i></a>
	    						<a class="next" id="event-next" href="#"><i class="fa fa-caret-right"></i></a>
							</div> <!-- nav -->

						</header> 
						<div class="event-carousel">
							
							<div class="event">
								<div class="entry-date">


									<div class="date" style="font-size: 11px">

<?php
 // $url="https://api.openweathermap.org/data/2.5/weather?q=Dhaka&units=metric&appid=c5418fccf24b18ce4b0cba8ffc76806a";

$url="https://api.openweathermap.org/data/2.5/forecast?q=Dhaka&units=metric&appid=c5418fccf24b18ce4b0cba8ffc76806a";
$theme= file_get_contents($url);
$weather= json_decode($theme);
$temp= $weather->list{0}->main->temp;
$temp_max= $weather->list{0}->main->temp_max;
$temp_min= $weather->list{0}->main->temp_min;
$cloud = $weather->list{0}->weather{0}->main;
$wind = $weather->list{0}->wind->speed;
$humidity = $weather->list{0}->main->humidity;
$feellike = $weather->list{0}->main->feels_like;

//weather8 thekee suru

$temp8= $weather->list{8}->main->temp;
$temp_max8= $weather->list{8}->main->temp_max;
$temp_min8= $weather->list{8}->main->temp_min;
$cloud8 = $weather->list{8}->weather{0}->main;
$wind8 = $weather->list{8}->wind->speed;
$humidity8 = $weather->list{8}->main->humidity;
$feellike8 = $weather->list{8}->main->feels_like;

//weathwe16 theke suru


$temp16= $weather->list{16}->main->temp;
$temp_max16= $weather->list{16}->main->temp_max;
$temp_min16= $weather->list{16}->main->temp_min;
$cloud16 = $weather->list{16}->weather{0}->main;
$wind16 = $weather->list{16}->wind->speed;
$humidity16 = $weather->list{16}->main->humidity;
$feellike16 = $weather->list{16}->main->feels_like;

//weather24 theke

$temp24= $weather->list{24}->main->temp;
$temp_max24= $weather->list{24}->main->temp_max;
$temp_min24= $weather->list{24}->main->temp_min;
$cloud24 = $weather->list{24}->weather{0}->main;
$wind24 = $weather->list{24}->wind->speed;
$humidity24 = $weather->list{24}->main->humidity;
$feellike24 = $weather->list{24}->main->feels_like;


//weather 32

$temp32= $weather->list{32}->main->temp;
$temp_max32= $weather->list{32}->main->temp_max;
$temp_min32= $weather->list{32}->main->temp_min;
$cloud32 = $weather->list{32}->weather{0}->main;
$wind32 = $weather->list{32}->wind->speed;
$humidity32 = $weather->list{32}->main->humidity;
$feellike32 = $weather->list{32}->main->feels_like;

 $today= date("F j, Y, g:i a");
// $cityname= $weather->name;
 $today= date("j M ");


			
								$d=strtotime("+1 day");
								echo date("l", $d) ;
							

// echo $cityname."-".$today."<br>";
// echo "Temp Max: ".$temp_max."&deg;<br>";
// echo "Temp Min: ".$temp_min."&deg;<br>";

?>
									</div>
									<span class="month"> </span>
								</div>
								<h2 class="entry-title"><a href="#"></a></h2>
								<p style="font-size:25px;color:sienna;font-weight: bolder;">
									<i class="fa fa-thermometer" style="font-size:20px;color:orangered;"></i>

								<?php
								// $temp= $weather->list{0}->temp;

								 // $temp_max= $weather->list{0}->main->temp_max;
                                 // $temp_min= $weather->list{0}->main->temp_min;
                                 // echo "Temp Max: ".$temp_max."&deg;<br>";
                                  echo "Temp: ".$temp."&deg;<br>";
                                  echo "Feels Like ".$feellike."&deg;<br>";
                                  echo "Temp Max: ".$temp_max."&deg;<br>";
                                  echo "Temp Min: ".$temp_min."&deg;<br>";

                                  echo "Comfort Level : " .$cloud."<br>";
                                  echo "Speed : " .$wind."<br>";
                                  echo "Humidity : " .$humidity."<br>";
?>

								</p>
							</div> <!-- .event -->
							
							
							<div class="event">
								<div class="entry-date">
									<div class="date" style="font-size: 11px;"> <?php


$today= date("j M ");
								$d=strtotime("+2 day");
								echo date("l", $d) ;
// echo $today."<br>";
// echo "Temp Max: ".$temp_max."&deg;<br>";
// echo "Temp Min: ".$temp_min."&deg;<br>";

?>
</div>
									<span class="month"></span>
								</div>
								<h2 class="entry-title"><a href="#"></a></h2>
								<p style="font-size:25px;color:sienna;font-weight: bolder;">
					            <i class="fa fa-thermometer" style="font-size:20px;color:orangered;"></i>

									<?php

								  echo "Temp: ".$temp8."&deg;<br>";
                                  echo "Feels Like ".$feellike8."&deg;<br>";
                                  echo "Temp Max: ".$temp_max8."&deg;<br>";
                                  echo "Temp Min: ".$temp_min8."&deg;<br>";

                                  echo "Comfort Level : " .$cloud8."<br>";
                                  echo "Speed : " .$wind8."<br>";
                                  echo "Humidity : " .$humidity8."<br>";
                              ?></p>
							</div> <!-- .event -->
							
							
							<div class="event">
								<div class="entry-date">
									<div class="date" style="font-size: 11px"><?php 
			
								$d=strtotime("+3 day");
								echo date("l", $d) ;
								?>		
</div>
									<!-- <span class="month">Jun</span> -->
								</div>
								<h2 class="entry-title"><a href="#"></a></h2>
								<p style="font-size:25px;color:sienna;font-weight: bolder;">
									 <i class="fa fa-thermometer" style="font-size:20px;color:orangered;"></i>

								<?php
								// $temp= $weather->list{0}->temp;

								 // $temp_max= $weather->list{0}->main->temp_max;
                                 // $temp_min= $weather->list{0}->main->temp_min;
                                 // echo "Temp Max: ".$temp_max."&deg;<br>";
                                  echo "Temp: ".$temp16."&deg;<br>";
                                  echo "Feels Like ".$feellike16."&deg;<br>";
                                  echo "Temp Max: ".$temp_max16."&deg;<br>";
                                  echo "Temp Min: ".$temp_min16."&deg;<br>";

                                  echo "Comfort Level : " .$cloud16."<br>";
                                  echo "Speed : " .$wind16."<br>";
                                  echo "Humidity : " .$humidity16."<br>";
?>

								</p>
							</div> <!-- .event -->
							
							
							<div class="event">
								<div class="entry-date">
									<div class="date" style="font-size:11px">
										<?php 
			
								$d=strtotime("+4 day");
								echo date("l", $d) ;
								?>	
									</div>
									<span class="month"></span>
								</div>
								<h2 class="entry-title"><a href="#"></a></h2>
								<p style="font-size:25px;color:sienna;font-weight: bolder;">
                                <i class="fa fa-thermometer" style="font-size:20px;color:orangered;"></i>

								<?php
								// $temp= $weather->list{0}->temp;

								 // $temp_max= $weather->list{0}->main->temp_max;
                                 // $temp_min= $weather->list{0}->main->temp_min;
                                 // echo "Temp Max: ".$temp_max."&deg;<br>";
                                  echo "Temp: ".$temp24."&deg;<br>";
                                  echo "Feels Like ".$feellike24."&deg;<br>";
                                  echo "Temp Max: ".$temp_max24."&deg;<br>";
                                  echo "Temp Min: ".$temp_min24."&deg;<br>";

                                  echo "Comfort Level : " .$cloud24."<br>";
                                  echo "Speed : " .$wind24."<br>";
                                  echo "Humidity : " .$humidity24."<br>";
?>
                              <!-- //lllllllllllllllllllllllllllllllllllllllllll -->

								 </p>
							</div> <!-- .event -->
							
							
							<div class="event">
								<div class="entry-date">
									<div class="date" style="font-size: 11px"><?php 
			
								$d=strtotime("+5 day");
								echo date("l", $d) ;
								?>	</div>
									<span class="month"></span>
								</div>
								<h2 class="entry-title"><a href="#"></a></h2>
								<p style="font-size:25px;color:sienna;font-weight: bolder;">

                                <i class="fa fa-thermometer" style="font-size:20px;color:orangered;"></i>

								<?php
								// $temp= $weather->list{0}->temp;

								 // $temp_max= $weather->list{0}->main->temp_max;
                                 // $temp_min= $weather->list{0}->main->temp_min;
                                 // echo "Temp Max: ".$temp_max."&deg;<br>";
                                  echo "Temp: ".$temp32."&deg;<br>";
                                  echo "Feels Like ".$feellike32."&deg;<br>";
                                  echo "Temp Max: ".$temp_max32."&deg;<br>";
                                  echo "Temp Min: ".$temp_min32."&deg;<br>";

                                  echo "Comfort Level : " .$cloud32."<br>";
                                  echo "Speed : " .$wind32."<br>";
                                  echo "Humidity : " .$humidity32."<br>";
?>

								 </p>
							</div> 
							
						</div> 
					</div> 
				</div> 

			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
											<i class="fa fa-sun-o" style="font-size:40px;color:gray;"></i><i class="material-icons" style="font-size:42px;color:gray;">cloud</i> <i class="fa fa-moon-o" style="font-size:40px;color:grey;"></i>
											<p style="font-size:30px;color:gray;font-weight: bolder;">WeatherForecast</p>

					
					<address>
						<p>Khilgaon,Dhaka. <br><a href="#">016xxxxxx</a> <br> <a href="#">info@WeatherForecast</a></p> 
					</address> 
					
					<form action="#" class="newsletter-form">
						<input type="email" placeholder="Enter your email to know more info...">
						<input type="submit" class="button cut-corner" value="Enter">
					</form>
					
					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div> <!-- .social-links -->
					
					<p class="copy">Copyright  WeatherForecast. Designed by Nabila Islam. All right reserved</p>
				</div>
			</footer> <!-- footer -->

		</div> <!-- content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>