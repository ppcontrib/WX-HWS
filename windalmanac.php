<?php include('livedata.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Almanac Wind Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:'Arial',sans-serif;background:rgba(11, 12, 12, 0.4)}body{font-family:"weathertext",Helvetica, Arial, sans-serif;color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:10px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:"weathertext",Helvetica, Arial, sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}.weather34card{width:31rem;height:16.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:10px;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__weather34-wrapper{width:8rem;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:100}.weather34cardguide{width:27rem;height:200px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:10px;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__count-text{font-family:"weathertext",Helvetica, Arial, sans-serif;text-align:left;width:200px}.weather34card__count-textuv{font-family:"weathertext",Helvetica, Arial, sans-serif;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}.weather34card__count-text--big{font-size:36px;font-weight:200;font-family:"weathertext",Helvetica, Arial, sans-serif;}.weather34card__count-text--bigs{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center}.weather34card__stuff-container{margin:0 auto;width:99%;height:16%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:"weathertext",Helvetica, Arial, sans-serif;text-align:center;font-size:12px}.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}.provided{position:absolute;color:#aaa;font-size:11px;bottom:7px;text-decoration:none;margin-left:100px;}updated{position:absolute;bottom:5px;float:right}solarwm2{font-size:10px;font-weight:normal}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.solarmaxi span{color:#aaa}
.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}
.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/gustrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}
.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner10{shape-rendering:crispEdges;background:RGBA(128,105,152,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;background:rgba(208, 80, 65, 0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner5{shape-rendering:crispEdges;background:rgba(255, 124, 57, 0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner3{shape-rendering:crispEdges;background:rgba(144, 177, 42, 0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:RGBA(143,177,42,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:200px;}.uvmaxi span{color:#aaa}.weather34-luxrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}.weather34-luxrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/luxrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-luxrate-bar .bar-1{height:100px;max-height:100px}.weather34-luxrate-bar .bar-inner1000{shape-rendering:crispEdges;background:RGBA(164,117,203,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner700{shape-rendering:crispEdges;background:RGBA(211,93,78,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner600{shape-rendering:crispEdges;background:RGBA(211,93,78,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner400{shape-rendering:crispEdges;background:RGBA(233,145,65,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner300{shape-rendering:crispEdges;background:RGBA(233,145,65,0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner1{shape-rendering:crispEdges;background:RGBA(255,136,65,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34luxrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34luxrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}.uvsun{position:absolute;top:10px;margin-left:175px}.sunfade{opacity:.8}unit{font-size:11px;color:rgba(0, 154, 171, 1.000);font-size:13px;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
actual{font-size:13px;float:right;position:absolute;left:125px;top:20px;-webkit-border-radius:4px;-moz-border-radius:4px;-o-border-radius:4px;border-radius:4px;background:rgba(86, 95, 103, 0.2);padding:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}sup{font-size:13px;}
.higustalltime{position:absolute;color:#aaa;font-size:12px;background:rgba(86, 95, 103, 0.2);width:100px;padding:3px;border-radius:3px;left:125px;top:95px;}


.higust span{color:rgba(255, 124, 57, 1.000)}
windgusts{position:absolute;font-size:1.4em;margin-top:40px;left:20px;color:rgba(74, 99, 111, 1.000)}
todaywindgusts{position:absolute;font-size:1.4em;margin-top:5px;left:20px;color:rgba(74, 99, 111, 1.000)}.hitempy{background:rgba(86, 95, 103, 0.2);color:#aaa;font-size:12px;width:180px;padding:3px;border-radius:4px;margin-top:0;margin-left:10px;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}

.windcontainer1{left:70px;top:0}
.windtoday,.windtoday10,.windtoday30,.windtoday40,.windtoday60{font-family:weathertext,Arial,Helvetica,system;width:7rem;height:5.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}.windtoday,.windtoday10,.windtoday30,.windtoday40,.windtoday60{font-size:2rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}
.windcaution,.windtrend{position:absolute;font-size:1rem}
.windtoday{background:#9aba2f}.windtoday10{background:rgba(230,161,65,1)}.windtoday30{background:rgba(255,124,57,.8)}.windtoday40{background:rgba(255, 124, 57, 0.8)}.windtoday60{background:rgba(211, 93, 78, 1.000)}
.windcaution{margin-left:120px;margin-top:112px;font-family:Arial,Helvetica,system}.windtrend{margin-left:135px;margin-top:48px;z-index:1;color:#fff}
smalluvunit{font-size:.85rem;font-family:Arial,Helvetica,system;}
</style>
</head>
<body>
<div class="weather34darkbrowser" url="Almanac Wind Data <?php echo $stationlocation;?>"></div> 

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            <?php
	// wind day km/h
	if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=60)  {
	echo "<div class='windtoday60'>",$weather["winddmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=40)  {
	echo "<div class='windtoday40'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=30)  {
	echo "<div class='windtoday30'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=10)  {
	echo "<div class='windtoday10'>",$weather["winddmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='km/h' && $weather["winddmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["winddmax"] . "</value>";}		
	
	//mph
	if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=37.2)  {
	echo "<div class='windtoday60'>",$weather["winddmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=24.85)  {
	echo "<div class='windtoday40'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=18.64)  {
	echo "<div class='windtoday30'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=6.2)  {
	echo "<div class='windtoday10'>",$weather["winddmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='mph' && $weather["winddmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["winddmax"] . "</value>";}
	
	//ms
	if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=16.66)  {
	echo "<div class='windtoday60'>",$weather["winddmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=11.11)  {
	echo "<div class='windtoday40'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=8.33)  {
	echo "<div class='windtoday30'>",$weather["winddmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=2.77)  {
	echo "<div class='windtoday10'>",$weather["winddmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='m/s' && $weather["winddmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["winddmax"] . "</value>";}
	echo "<smalluvunit>".$weather["wind_units"]."</smalluvunit>";	
	
?>
</div>




</span> 

<div class="weather34-uvrate-bar" style="top:80px;">
 <svg iopacity="0.7"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.7"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["winddmax"]>110){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["winddmax"]>100){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["winddmax"]>90){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["winddmax"]>80){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["winddmax"]>70){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["winddmax"]>60){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["winddmax"]>50){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["winddmax"]>40){echo " #ff8841";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["winddmax"]>30){echo " #ff8841";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["winddmax"]>20){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["winddmax"]>10){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["winddmax"]>0){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
 <div class="higust">Highest Gust Measured at <span><?php echo $weather["winddmaxtime"];?></span></div>
 
    
 <br>
 
<img src="css/icons/gust.svg" width="40px" > <windgusts> Today <?php echo date('l')?></windgusts>
 

            </div>
            
            
            
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                
            </div>
        </div>
     <div class="weather34card__stuff-container">
            
<div class="weather34card__stuff-text"> 	
<div class="uvmaxi2">

</div></div> </div>


    </div>
    
    
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
            
  <div class="weather34-uvrate-bar" style="top:80px;">
 <svg iopacity="0.7"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.7"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["windmmax"]>110){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["windmmax"]>100){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["windmmax"]>90){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["windmmax"]>80){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["windmmax"]>70){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["windmmax"]>60){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["windmmax"]>50){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["windmmax"]>40){echo " #ff8841";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["windmmax"]>30){echo " #ff8841";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["windmmax"]>20){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["windmmax"]>10){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["windmmax"]>0){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
            
            
            
             <?php
	// wind month km/h
	if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=60)  {
	echo "<div class='windtoday60'>",$weather["windmmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=40)  {
	echo "<div class='windtoday40'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=30)  {
	echo "<div class='windtoday30'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=10)  {
	echo "<div class='windtoday10'>",$weather["windmmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='km/h' && $weather["windmmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windmmax"] . "</value>";}		
	
	//mph
	if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=37.2)  {
	echo "<div class='windtoday60'>",$weather["windmmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=24.85)  {
	echo "<div class='windtoday40'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=18.64)  {
	echo "<div class='windtoday30'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=6.2)  {
	echo "<div class='windtoday10'>",$weather["windmmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='mph' && $weather["windmmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windmmax"] . "</value>";}
	
	//ms
	if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=16.66)  {
	echo "<div class='windtoday60'>",$weather["windmmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=11.11)  {
	echo "<div class='windtoday40'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=8.33)  {
	echo "<div class='windtoday30'>",$weather["windmmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=2.77)  {
	echo "<div class='windtoday10'>",$weather["windmmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='m/s' && $weather["windmmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windmmax"] . "</value>";}
	echo "<smalluvunit>".$weather["wind_units"]."</smalluvunit>";	
?>
</div>

</span>  <div class="higust">Highest Gust Measured <span><?php echo $weather["windmmaxtime"];?></span></div>
<br>
<img src="css/icons/gust.svg" width="40px" > <windgusts> <?php echo date('F Y')?></windgusts>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               
            
                

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
           
             

</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="top:80px;">
 <svg iopacity="0.7"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.7"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["windydmax"]>110){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["windydmax"]>100){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["windydmax"]>90){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["windydmax"]>80){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["windydmax"]>70){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["windydmax"]>60){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["windydmax"]>50){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["windydmax"]>40){echo " #ff8841";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["windydmax"]>30){echo " #ff8841";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["windydmax"]>20){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["windydmax"]>10){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["windydmax"]>0){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
 
            
            
            
            <?php
	// wind yesteray km/h
	if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=60)  {
	echo "<div class='windtoday60'>",$weather["windydmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=40)  {
	echo "<div class='windtoday40'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=30)  {
	echo "<div class='windtoday30'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=10)  {
	echo "<div class='windtoday10'>",$weather["windydmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='km/h' && $weather["windydmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windydmax"] . "</value>";}		
	
	//mph
	if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=37.2)  {
	echo "<div class='windtoday60'>",$weather["windydmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=24.85)  {
	echo "<div class='windtoday40'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=18.64)  {
	echo "<div class='windtoday30'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=6.2)  {
	echo "<div class='windtoday10'>",$weather["windydmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='mph' && $weather["windydmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windydmax"] . "</value>";}
	
	//ms
	if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=16.66)  {
	echo "<div class='windtoday60'>",$weather["windydmax"] . "</value>";} 	
	else if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=11.11)  {
	echo "<div class='windtoday40'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=8.33)  {
	echo "<div class='windtoday30'>",$weather["windydmax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=2.77)  {
	echo "<div class='windtoday10'>",$weather["windydmax"] . "</value>";} 		
	else if ($weather["wind_units"]=='m/s' && $weather["windydmax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windydmax"] . "</value>";}
	echo "<smalluvunit>".$weather["wind_units"]."</smalluvunit>";	
	
?>
</div>


</span> <div class="higust">Highest Gust Measured at <span><?php echo $weather["windydmaxtime"];?></span></div>
<br>
<img src="css/icons/gust.svg" width="40px" > <windgusts> Yesterday <?php echo date("l", strtotime( '-1 days' ) );?></windgusts> 

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
             
</div></div></div></div>



    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="top:80px;">
 <svg iopacity="0.7"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.8" opacity="0.7"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if($weather["windmmax"]>110){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($weather["windymax"]>100){echo "rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($weather["windymax"]>90){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($weather["windymax"]>80){echo " rgba(237, 73, 71, 0.8)";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($weather["windymax"]>70){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($weather["windymax"]>60){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($weather["windymax"]>50){echo " #f5650a";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($weather["windymax"]>40){echo " #ff8841";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($weather["windymax"]>30){echo " #ff8841";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($weather["windymax"]>20){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($weather["windymax"]>10){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($weather["windymax"]>0){echo " #9aba2f";} else echo "currentcolor"?>"   opacity="0.7"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
            
            
           <?php
	// wind year km/h
	if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=60)  {
	echo "<div class='windtoday60'>",$weather["windymax"] . "</value>";} 	
	else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=40)  {
	echo "<div class='windtoday40'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=30)  {
	echo "<div class='windtoday30'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=10)  {
	echo "<div class='windtoday10'>",$weather["windymax"] . "</value>";} 		
	else if ($weather["wind_units"]=='km/h' && $weather["windymax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windymax"] . "</value>";}		
	
	//mph
	if ($weather["wind_units"]=='mph' && $weather["windymax"]>=37.2)  {
	echo "<div class='windtoday60'>",$weather["windymax"] . "</value>";} 	
	else if ($weather["wind_units"]=='mph' && $weather["windymax"]>=24.85)  {
	echo "<div class='windtoday40'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windymax"]>=18.64)  {
	echo "<div class='windtoday30'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='mph' && $weather["windymax"]>=6.2)  {
	echo "<div class='windtoday10'>",$weather["windymax"] . "</value>";} 		
	else if ($weather["wind_units"]=='mph' && $weather["windymax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windymax"] . "</value>";}
	
	//ms
	if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=16.66)  {
	echo "<div class='windtoday60'>",$weather["windymax"] . "</value>";} 	
	else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=11.11)  {
	echo "<div class='windtoday40'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=8.33)  {
	echo "<div class='windtoday30'>",$weather["windymax"] . "</value>";}
	else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=2.77)  {
	echo "<div class='windtoday10'>",$weather["windymax"] . "</value>";} 		
	else if ($weather["wind_units"]=='m/s' && $weather["windymax"]>=-0) {
	echo "<div class='windtoday'>",$weather["windymax"] . "</value>";}
	echo "<smalluvunit>".$weather["wind_units"]."</smalluvunit>";	
	
?>
</div>


</span> <div class="higust">Highest Gust Measured <span><?php echo $weather["windymaxtime"];?></span></div>

<br>
<img src="css/icons/gust.svg" width="40px" > <windgusts> <?php echo "Year ".date('Y')?></windgusts>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           <div class="higustalltime">Max Gust Alltime <orange><?php echo $weather["windamax"]. "<blue> ".$weather["wind_units"];?></blue></orange><br> <?php echo $weather["windamaxtime"];?></span></div>
             

</section><br><br>
<div class="provided">   
&nbsp;
<?php echo $info?> Wind Almanac Meteobridge CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>