<?php header('Content-type: text/html; charset=utf-8');error_reporting(0);
####################################################################################################
# HOME WEATHER STATION TEMPLATE by BRIAN UNDERDOWN 2015-2016-2017-2018                             #
# CREATED FOR HOMEWEATHERSTATION TEMPLATE at                									   #
#   https://weather34.com/homeweatherstation/index.html                                            #
#  WEATHER STATION TEMPLATE 2015-2016-2017-2018 Meteobridge.           							   #
#  Meteobridge Davis Version  														               #
#   https://www.weather34.com                                                                      #
####################################################################################################
include_once('livedata.php');include_once('common.php');include_once('settings1.php'); date_default_timezone_set($TZ);?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $stationlocation; ?> Home Weather Station</title>
<meta content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>" name="description">
<!--Google / Search Engine Tags -->
<meta itemprop="name" content="Home Weather Station <?php echo $stationlocation;?>">
<meta itemprop="description" content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>">
<meta itemprop="image" content="img/weather34_meta.png">
<!-- Facebook Meta Tags -->
<meta property="og:url" content="">
<meta property="og:type" content="website">
<meta property="og:title" content="Home Weather Station <?php echo $stationlocation;?>">
<meta property="og:description" content="Home weather station providing current weather conditions for <?php echo $stationlocation;?>">
<meta property="og:image" content="img/weather34_meta.png">
<!-- Twitter Meta Tags -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="">
<meta property="twitter:title" content="Home Weather Station <?php echo $stationlocation;?>">
<meta property="twitter:description" content="Home Weather Station <?php echo $stationlocation;?>">
<meta property="twitter:image" content="img/weather34_meta.png">
    <meta content="place" property="og:type">
    <meta content="weather34" name="author">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name=apple-mobile-web-app-title content="HOME WEATHER STATION">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, viewport-fit=cover">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
<link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="img/manifest.json">
<meta name="theme-color" content="#ffffff">
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
<link href="favicon.ico" rel="icon" type="image/x-icon">
<link href="css/main.<?php echo $theme;?>.css?version=<?php echo filemtime('css/main.'.$theme.'.css');?>" rel="stylesheet prefetch">
</head>
<body>
<!-- begin top layout for homeweatherstation template-->
<div class="weather2-container">
<div class="container weather34box-toparea">
  <!-- position1 --->
  <div class="weather34box clock">  <div class="title"><?php echo $info?> <?php echo $position1title ;?> </div><div class="value"><div id="position1"></div></div></div>
   <!-- position2--->
  <div class="weather34box indoor"> <div class="title"><?php echo $info?> <?php echo $position2title ;?> </div><div class="value"><div id="position2"></div></div></div>
  <!-- position3--->
  <div class="weather34box earthquake"> <div class="title"><?php echo $info?> <?php echo $position3title ;?> </div><div class="value"><div id="position3"></div></div></div>
  <!-- position4--->
  <div class="weather34box alert"><div class="title"><?php echo $info;?> <?php echo $position4title ;?> </div><div class="value"><div id="position4"></div></div></div>
  </div></div></div></div>
<!--end position section for homeweatherstation template-->
<!--begin outside/station data section for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
<!--<span class="yearpopup">  <a alt="almanac temperature" title="almanac temperature" href="tempalmanac.php" data-featherlight="iframe" > <?php echo $chartinfo?> Almanac </a></span>-->
<span class="yearpopup">  <a alt="yearly temperature" title="yearly temperature" href="<?php echo $chartsource ;?>/yearlytemperature.php" data-featherlight="iframe" > <?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a alt="monthly temperature" title="monthly temperature" href="<?php echo $chartsource ;?>/monthlytemperature.php" data-featherlight="iframe" > <?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a alt="today temperature" title="today temperature" href="<?php echo $chartsource ;?>/todaytemperature.php" data-featherlight="iframe" >  <?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
<span class='moduletitle'> <?php echo $lang['Temperature']; ?> <?php echo "(&deg;" . $weather["temp_units"] . " )";?></span><br /></span>
  <div id="temperature"></div><br></div>
  <!--forecast for homeweatherstation template-->
<div class="weather-item"><div class="chartforecast">
<span class="yearpopup"> <a alt="forecast summary" title="forecast summary" href="outlookds.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo $lang['Forecastsummary'];?></a></span>
<span class="yearpopup">  <a alt="hourly forecast" title="hourly forecast windspeed" href="forecastdshour.php" data-featherlight="iframe" ><?php echo $chartinfo?> <?php echo $lang['Hourlyforecast']; ?></a></span>
      </div>
  <span class='moduletitle'>
    <?php echo $lang['Forecast'];?>  </span><br />
  <div id="currentfore"></div></div>
  <!--currentsky for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast">
         <!-- HOURLY & Outlook for homeweather station-->
  <span class="yearpopup"> <a alt="nearby metar station" title="nearby metar station" href="metarnearby.php" data-featherlight="iframe"><?php echo $chartinfo?> <?php echo 'Nearby Metar';?> <?php if(filesize('jsondata/metar34.txt')<160){echo "(<ored>Offline</ored>)";}else echo "" ?></a></span>

         </div>
  <span class='moduletitle'><?php echo $lang['Currentsky'];?></span><br />
  <div id="currentsky"></div></div></div>
 <!--windspeed for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast">
<!--<span class="yearpopup">  <a alt="windspeed almanac" title="windspeed almanac" href="windalmanac.php" data-featherlight="iframe" ><?php echo $chartinfo?> Almanac </a></span>-->
<span class="yearpopup">  <a alt="yearly windspeed" title="yearly windspeed" href="<?php echo $chartsource ;?>/yearlywindspeedgust.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?></a></span>
<span class="monthpopup"> <a alt="monthly windspeed" title="monthly windspeed"href="<?php echo $chartsource ;?>/monthlywindspeedgust.php" data-featherlight="iframe"><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a alt="today windspeed" title="today windspeed" href="<?php echo $chartsource ;?>/todaywindspeedgust.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Direction'];?> | <?php echo $lang['Windspeed'] ," (",$weather["wind_units"];?>)</span><br />
         <div id="windspeed"></div></div>
       <!--barometer for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" >
 <!--<span class="yearpopup">  <a alt="barometer almanac" title="barometer almanac" href="barometeralmanac.php" data-featherlight="iframe" ><?php echo $chartinfo?> Almanac </a></span>-->
<span class="yearpopup">  <a alt="yearly barometer" title="yearly barometer" href="<?php echo $chartsource ;?>/yearlybarometer.php" data-featherlight="iframe"><?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a alt="monthly barometer" title="monthly barometer" href="<?php echo $chartsource ;?>/monthlybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a alt="today barometer" title="today barometer" href="<?php echo $chartsource ;?>/todaybarometer.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?></a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Barometer']," (",$weather["barometer_units"]; ?>)</span><br />
         <div id="barometer"></div></div>
       <!--moonphase for homeweatherstation template includes reverse for southern hemisohere-->
<div class=weather-item><div class=chartforecast>
<?php if ($purpleairhardware=='yes'){echo''?>
  <span class="yearpopup" style="-webkit-transform:rotate(<?php echo $hemisphere;?>deg);-moz-transform:rotate(<?php echo $hemisphere;?>deg);-ms-transform:rotate(<?php echo $hemisphere;?>deg);-o-transform:rotate(<?php echo $hemisphere;?>deg);transform:rotate(<?php echo $hemisphere;?>deg);"><?php echo $moon=moon_posit($months, $days, $years);?>
<a alt="current moonphase" title="current moonphase" href=mooninfo.php data-featherlight=iframe><?php $moon = new MoonPhase();$moonage =$moon->age();
{if ($moonage<1.84566) {echo "New Moon";} elseif ($moonage<5.53699) {echo "Waxing Crescent";} elseif ($moonage<9.22831) {echo "First Quarter";} elseif ($moonage<12.91963) {echo "Waxing Gibbous";
} elseif ($moonage<16.61096) {echo "Full Moon";} elseif ($moonage<20.302228) {echo "Waning Gibbous";} elseif ($moonage<23.99361) {echo "Last Quarter";} elseif ($moonage<27.68493) {    echo "Waning Crescent";
} else { echo "New Moon ";}}}
?></a></span>  
<span class="yearpopup"><a alt="meteor showers" title="meteor showers" href="meteorshowers.php" data-featherlight="iframe"><?php echo $meteorinfo;?> &nbsp;<?php if ($meteor_default=='No Meteor') {echo "Meteor Showers";} else {	echo $meteor_default;}?></a></span>
<span class="todaypopup"><a alt="aurora information" title="aurora information" href=aurora.php data-featherlight=iframe><?php echo $info;?> Aurora <?php if ($kp>=5) {echo '<oorange>Active</oorange>';}else {echo "";}?></a></span></div>
<span class='moduletitle'><?php echo $lang['Daylight']. " | ". $lang['Darkness'];?></span><br />
  <div id="moonphase"></div> </div></div></div>
 <!--rainfall for homeweatherstation template-->
<div class="weather-container"><div class="weather-item"><div class="chartforecast" >
<!--<span class="yearpopup">  <a alt="almanac rainfall" title="almanac rainfall" href="rainfallalmanac.php" data-featherlight="iframe" ><?php echo $chartinfo?> Almanac </a></span>-->
<span class="yearpopup">  <a alt="yearly rainfall" title="yearly rainfall" href="<?php echo $chartsource ;?>/yearlyrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo date('Y');?> </a></span>
<span class="monthpopup"> <a alt="monthly rainfall" title="monthly rainfall" href="<?php echo $chartsource ;?>/monthlyrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo strftime(" %b") ;?> </a></span>
<span class="todaypopup"> <a alt="today rainfall" title="today rainfall" href="<?php echo $chartsource ;?>/todayrainfall.php" data-featherlight="iframe" ><?php echo $menucharticonpage?> <?php echo $lang['Today']; ?> </a></span>
      </div>
  <span class='moduletitle'><?php echo $lang['Rainfalltoday']," (".$weather["rain_units"]?>)</span><br />
         <div id="rainfall"></div></div>
  <!--solar or web cam for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast"  >
  <span class="yearpopup">
    <?php if ($uvhardware == 'webcamsmall.php') {echo $webcamicon. ' <a alt="web cam" title="web cam" href="cam.php" data-featherlight="iframe" >'.$lang['LiveWebCam'] ."</a>";} else {echo '';}?></a></span>
        <?php 
		if ($uvhardware == 'weather34uvsolar.php') {echo '<span class="yearpopup"><a alt="UV-Index Information" title="UV-Index Information" href="uvindex.php" data-featherlight="iframe">'.$chartinfo.' UV Guide </a></span> 
		<span class="yearpopup"><a alt="UV-Index Amanac" title="UV-Index Almanac" href="uvalmanac.php" data-featherlight="iframe">'.$chartinfo.' UV Almanac</a></span>  
		<span class="yearpopup"><a alt="Solar Rdiation Almanac" title="Solar Radiation Almanac" href="solaralmanac.php" data-featherlight="iframe">'.$chartinfo.' Solar Almanac</a></span>';} 
	 elseif ($uvhardware == 'solaruvds.php') {echo '<span class="yearpopup"><a alt="UV-Index Information" title="UV-Index Information" href="uvindexds.php" data-featherlight="iframe">'.$chartinfo.' Solar | UV Index </a></span>';}	
	 elseif ($uvhardware == 'weatherflowuvsolar.php') {echo '<span class="yearpopup"><a alt="UV-Index Information" title="UV-Index Information" href="uvindexwf.php" data-featherlight="iframe">'.$chartinfo.' UV Guide </a></span>';}
	 elseif ($uvhardware == 'eq.php') {echo '<span class="yearpopup"><a alt="Earthquake Information" title="Earthquake Information" href="eqlist.php" data-featherlight="iframe">'.$chartinfo.' Latest Earthquakes Worldwide</a></span>';}
	 elseif ($uvhardware == 'indoortemperature.php') {echo '<span class="yearpopup"><a alt="Indoor Information" title="Indoor Information" href="homeindoor.php" data-featherlight="iframe">'.$chartinfo.' Guide</a></span>';}?>
    </div>
  <span class='moduletitle'>
    <?php
if ($uvhardware == 'solar.php') {
	echo $lang['UVSOLAR'];} elseif ($uvhardware == 'uvsolarlux.php') {	echo "Solar | UV-Index | Lux";} elseif ($uvhardware == 'weather34uvsolar.php') {echo "Solar | UV-Index | Lux";}
	elseif ($uvhardware == 'weatherflowuvsolar.php') {echo "Solar | UV-Index | Lux";}
	elseif ($uvhardware == 'solaruvds.php') {echo $lang['UVSOLAR'];}
	elseif ($uvhardware == 'eq.php') {echo $lang['Earthquake'];}
	elseif ($uvhardware == 'indoortemperature.php') {
	echo $lang['Indoor']," ",$lang['Temperature']," (&deg;",$weather["temp_units"].")";}elseif ($uvhardware == 'webcamsmall.php') {echo
	$webcamicon , $lang['LiveWebCam'];
} ?></span></span><br />
<div id="solar"></div></div>
 <!--air quality- moon for homeweatherstation template-->
  <div class="weather-item"><div class="chartforecast" >
  <?php if ($purpleairhardware=='no'){echo''?>
  <span class="yearpopup" style="-webkit-transform:rotate(<?php echo $hemisphere;?>deg);-moz-transform:rotate(<?php echo $hemisphere;?>deg);-ms-transform:rotate(<?php echo $hemisphere;?>deg);-o-transform:rotate(<?php echo $hemisphere;?>deg);transform:rotate(<?php echo $hemisphere;?>deg);"><?php echo $moon=moon_posit($months, $days, $years);?>
<a alt="current moonphase" title="current moonphase" href=mooninfo.php data-featherlight=iframe><?php $moon = new MoonPhase();$moonage =$moon->age();
{if ($moonage<1.84566) {echo "New Moon";} elseif ($moonage<5.53699) {echo "Waxing Crescent";} elseif ($moonage<9.22831) {echo "First Quarter";} elseif ($moonage<12.91963) {echo "Waxing Gibbous";
} elseif ($moonage<16.61096) {echo "Full Moon";} elseif ($moonage<20.302228) {echo "Waning Gibbous";} elseif ($moonage<23.99361) {echo "Last Quarter";} elseif ($moonage<27.68493) {    echo "Waning Crescent";
} else { echo "New Moon ";}}}
?></a></span>  
  <span class="yearpopup"><?php
if ($purpleairhardware=='yes') {echo ' <a alt="air quality information" title="air quality information" href="purpleair.php" data-featherlight="iframe">'. $chartinfo. "Air Quality | Cloudbase </a></span>";} 
?>
    </div>
   <span class='moduletitle'>
   <?php if ($purpleairhardware=="yes") {echo "Purple Air Quality Index";} else if ($uvhardware="indoortemperature.php") {echo $lang['Moonphase'];}?></span></span>
      <div id="dldata"></div>
    </div></div>
 <!--end outdoor data for homeweatherstation template-->
  <!--footer area for homeweatherstation template warning dont mess with this below this line unless you really know what you are doing-->
<div class=weatherfooter-container><div class=weatherfooter-item> 
<div class=hardwarelogo1><a href="http://weewx.com" target="_blank" title=""><img src="img/weewx.svg" width="125px" height="25px" alt="meteobridge"></a></div><div class=hardwarelogo2><?php 
if ($davis=="Yes"){echo '<a href="https://www.davisinstruments.com/solution/vantage-pro2/" title="https://www.davisinstruments.com/solution/vantage-pro2/" target="_blank"><img src="img/designedfor.svg" width="125px" height="125px" alt="Davis Instruments&reg;" ></a>';}
else if ($weatherhardware=='Weatherflow Air-Sky'){echo '<a href="http://weatherflow.com/" title="http://weatherflow.com/" target="_blank"><img src="img/wflogo.svg" width="100px" alt="http://weatherflow.com/" ></a>';}
else echo '<br><br><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><img src="img/weather34logo.svg" width="40px" alt="https://weather34.com/homeweatherstation/" class="homeweatherstationlogo" ></a>';?> </div>

<div class=footertext>
<?php echo $info?>Source:<?php echo $mbplatform;?> (<?php echo $weather["swversion"];echo "-",$weather["version"]." Template:&nbsp;<oblue>".$templateversion?></oblue>)&nbsp;
<?php echo $info;?>Hardware:&nbsp;<?php echo $weatherhardware;?><br><?php echo $info;?> Maintained by <a href="mailto:steepleian@gmail.com">Steepleian <a href="https://github.com/steepleian/weather34-Home-Weatherstation-Template-weeWX-adapted" title="https://github.com/steepleian/weather34-Home-Weatherstation-Template-weeWX-adapted">
at Github &nbsp; <img src="img/flags/<?php echo $flag ;?>.svg" width="20px" ><?php 
if (isset($personalmessage) and trim($personalmessage) <> '') {echo '<br />'.$personalmessage;}
?></div></div></div>
<div id=lightningalert></div></body><?php include('updater.php');include('menu.php')?></html>