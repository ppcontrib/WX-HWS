<?php include('livedata.php');?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Weather34 Almanac Temperature Data Popup </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <style>
@font-face{font-family:weathertext;src:url(css/fonts/sanfranciscodisplay-regular-webfont.woff) format("woff")}*,*:before,*:after{-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0}html,body{font-size:62.5%;font-family:"weathertext",Helvetica, Arial, sans-serif;background:rgba(11, 12, 12, 0.4)}body{color:#aaa;overflow-x:hidden;min-height:80vh;padding:10px}section{width:80vw;max-width:64rem;min-width:58.9rem;margin:0 auto;padding:5px;margin-bottom:-5px}.weather34title{font-size:14px;font-weight:normal;padding-top:3px;font-family:'Arial',sans-serif;width:400px}.weather34cards{padding-top:2rem;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;padding:5px}
.weather34card{width:31.2rem;height:14.5rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:15px;border:solid #444 1px}
.weather34card__weather34-container{height:50%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end;padding:15px;font-family:"weathertext",Helvetica, Arial, sans-serif;}
.weather34card__weather34-wrapper{width:8rem;font-family:"weathertext",Helvetica, Arial, sans-serif;;font-weight:100}
.weather34cardguide{width:27rem;height:210px;background:RGBA(37,41,45,0);border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:12px;font-weight:normal;padding:5px;border:solid #444 1px;line-height:13px}.weather34card__weather34-guide{width:3rem;font-family:"weathertext",Helvetica, Arial, sans-serif;;font-weight:100}.weather34card__count-container{-webkit-box-flex:1;-ms-flex-positive:1;flex-grow:1;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:30px;font-family:"weathertext",Helvetica, Arial, sans-serif;}
.weather34card__count-text{font-family:"weathertext",Helvetica, Arial, sans-serif;;text-align:left;width:200px}
.weather34card__count-textuv{font-family:"weathertext",Helvetica, Arial, sans-serif;;width:200px;float:left;font-size:13px;text-align:left;margin-left:-20px;line-height:12px}
.weather34card__count-text--big{font-size:26px;font-weight:200;font-family:"weathertext",Helvetica, Arial, sans-serif;paddin-top:10px}
.weather34card__count-text--bigs{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center;margin-top:5px;width:100px}weather34card__count-text--bigsa{font-size:12px;font-family:"weathertext",Helvetica, Arial, sans-serif;font-weight:normal;color:#aaa;text-align:center}
.weather34card__stuff-container{margin:0 auto;width:99%;height:18%;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:15px;color:#aaa;background:RGBA(37,41,45,0);border:solid RGBA(156,156,156,0.1) 0;-webkit-border-radius:4px;-moz-border-radius:4px;-ms-border-radius:4px;-o-border-radius:4px;border-radius:4px;font-family:"weathertext",Helvetica, Arial, sans-serif;text-align:center;font-size:12px}
.weather34card:after{content:"";display:block;position:absolute;top:0;left:0;width:16rem;height:4.625rem;padding:10px}.weather34card--earthquake1:after{background-image:radial-gradient(to bottom,rgba(106,122,135,0.5),transparent 70%)}.weather34card--earthquake2:after{background-image:radial-gradient(to bottom,rgba(106,191,96,0.5),transparent 70%)}.weather34card--earthquake3:after{background-image:radial-gradient(to bottom,rgba(96,203,231,0.5),transparent 70%)}blue{color:#01a4b4}orange{color:#ff8841}green{color:#9aba2f}red{color:#f37867}red6{color:#d65b4a}darkred{color:#f47264}value{color:#fff}yellow{color:RGBA(163,133,58,1)}purple{color:#916392}time{color:#aaa;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}time span{color:#ff8841;font-weight:normal;font-family:"weathertext",Helvetica, Arial, sans-serif;}a{color:#aaa;font-size:11px;top:5px;margin-top:10px;text-decoration:none}
.provided{position:absolute;color:#aaa;font-size:10px;bottom:3px;text-decoration:none;margin-left:100px;}updated{position:absolute;bottom:5px;float:right}.weather34-solarrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-6px}
.weather34solarrate{color:#ff8841;position:absolute;margin-left:36px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34solarrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px}solarwm2{font-size:10px;font-weight:normal}.solarmaxi{position:absolute;margin-left:100px;float:right;color:#ff8841;margin-top:15px;width:100px;font-size:11px}.solarmaxi span{color:#aaa}.weather34-uvrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:235px;margin-top:-49px;color:RGBA(57,61,64,1)}.weather34-uvrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/temprulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-uvrate-bar .bar-1{height:100px;max-height:100px}
.weather34-uvrate-bar .bar-inner10{shape-rendering:crispEdges;background:RGBA(128,105,152,0.5);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner8{shape-rendering:crispEdges;background:RGBA(174,81,82,0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner5{shape-rendering:crispEdges;background:rgba(255, 124, 57, 0.8);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner3{shape-rendering:crispEdges;background:rgba(144, 177, 42, 0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}
.weather34-uvrate-bar .bar-inner{shape-rendering:crispEdges;background:rgba(0, 154, 171, 0.6);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34uvrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34uvrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}purpleuv{color:#a475cb}reduv{color:#d65b4a}orangeuv{color:#ff8841}greenuv{color:#9aba2f}greyuv{color:#aaa}.uvmaxi{position:absolute;left:10px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:200px;}.uvmaxi span{color:#aaa}.weather34-luxrate-bar{background:0;position:absolute;height:100px;width:30px;margin-left:245px;margin-top:-6px}.weather34-luxrate-bar .bar{shape-rendering:crispEdges;background:url(css/rain/luxrulerw34.svg) no-repeat;width:37px;border:1px solid RGBA(57,61,64,1.00);border-bottom:5px solid RGBA(57,61,64,1.00);border-top:3px solid RGBA(57,61,64,1.00);-webkit-border-radius:1px 1px 2px 2px;position:absolute;bottom:0}.weather34-luxrate-bar .bar-1{height:100px;max-height:100px}.weather34-luxrate-bar .bar-inner1000{shape-rendering:crispEdges;background:RGBA(164,117,203,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner700{shape-rendering:crispEdges;background:RGBA(211,93,78,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner600{shape-rendering:crispEdges;background:RGBA(211,93,78,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner400{shape-rendering:crispEdges;background:RGBA(233,145,65,0.5);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner300{shape-rendering:crispEdges;background:RGBA(233,145,65,0.5);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34-luxrate-bar .bar-inner1{shape-rendering:crispEdges;background:RGBA(255,136,65,0.7);width:100%;-webkit-border-radius:1px 1px 2px 2px;border:0}.weather34luxrate{color:#ff8841;position:absolute;margin-left:238px;margin-top:17px;font-size:12px;width:20px;font-family:weathertext,arial,sans-serif;max-height:100px;line-height:10px;font-weight:normal}.weather34luxrate span{color:#777;font-family:weathertext,arial,sans-serif;font-size:12px;font-weight:normal}.uvsun{position:absolute;top:10px;margin-left:175px}.sunfade{opacity:.8}unit{font-size:13px;color:#aaa;}.uvmaxi2{position:absolute;left:-10px;color:rgba(0, 154, 171, 1.000);margin-top:-60px;font-size:16px;width:200px;}.uvmaxi2 span{color:#aaa}
.hitempypos{position:absolute;margin-top:90px;}
.hitempypos1{position:absolute;margin-top:-5px;}
.weather34card2{width:31.2rem;height:6.2rem;background-color:#none;border-radius:4px;position:relative;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;color:#aaa;font-size:11px;font-weight:normal;padding:10px;border:solid #444 1px}
.hitempalltimepos{position:absolute;margin-top:10px;}
.actual{font-size:2rem;float:right;position:absolute;left:120px;top:25px;background:0;padding:2px;font-weight:normal;color:rgba(74, 99, 111, 0.5);margin-bottom:5px;}
.actual1{font-size:11px;float:none;position:absolute;left:10px;top:5px;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;border-radius:3px;background:rgba(86, 95, 103, 0.2);padding:1px;font-weight:normal;
margin-bottom:5px;}.uvmaxi3{position:absolute;left:-30px;color:rgba(0, 154, 171, 1.000);margin-top:-40px;font-size:16px;width:240px;}.uvmaxi3 span{color:#aaa}.hitemp{color:#aaa;font-size:12px;display:inline;}.hitemp span{color:rgba(255, 124, 57, 1.000)}
.hitempy{background:rgba(86, 95, 103, 0.3);color:#aaa;font-size:12px;width:230px;padding:0;-webkit-border-radius:3px;border-radius:3px;margin-top:1px;margin-left:0;padding-left:3px;display:block}
.hitempa{background:rgba(86, 95, 103, 0.3);color:#aaa;font-size:12px;width:245px;padding:0;-webkit-border-radius:3px;border-radius:3px;margin-top:3px;margin-left:0;padding-left:3px;display:block}
.lotemp{font-size:26px;font-family:weathertext;}blue{color:rgba(0, 154, 171, 1.000)}.icon{position:absolute;right:0;bottom:10px;}
.weather34chart-btn.close:after,.weather34chart-btn.close:before{color:#ccc;position:absolute;font-size:14px;font-family:Arial,Helvetica,sans-serif;font-weight:600}.weather34browser-header{flex-basis:auto;height:35px;background:#ebebeb;background:0;border-bottom:0;display:flex;margin-top:-20px;width:100%;-webkit-border-top-left-radius:5px;-webkit-border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px;border-top-left-radius:5px;border-top-right-radius:5px}.weather34browser-footer{flex-basis:auto;height:35px;background:#ebebeb;background:rgba(56,56,60,1);border-bottom:0;display:flex;bottom:-20px;width:97.4%;-webkit-border-bottom-right-radius:5px;-webkit-border-bottom-left-radius:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-bottomleft:5px;border-bottom-right-radius:5px;border-bottom-left-radius:5px}.weather34chart-btns{position:absolute;height:35px;display:inline-block;padding:0 10px;line-height:38px;width:55px;flex-basis:auto;top:5px}.weather34chart-btn{width:14px;height:14px;border:1px solid rgba(0,0,0,.15);border-radius:6px;display:inline-block;margin:1px}.weather34chart-btn.close{background-color: rgba(255, 124, 57, 1.000)}.weather34chart-btn.close:before{content:"x";margin-top:-14px;margin-left:2px}.weather34chart-btn.close:after{content:"close window";margin-top:-13px;margin-left:15px;width:300px}a{color:#aaa;text-decoration:none;font-size:10px;}
.weather34darkbrowser{position:relative;background:0;width:104%;max-height:30px;margin:auto;margin-top:-15px;margin-left:-20px;border-top-left-radius:5px;border-top-right-radius:5px;padding-top:45px;background-image:radial-gradient(circle,#EB7061 6px,transparent 8px),radial-gradient(circle,#F5D160 6px,transparent 8px),radial-gradient(circle,#81D982 6px,transparent 8px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),radial-gradient(circle,rgba(97,106,114,1) 2px,transparent 2px),linear-gradient(to bottom,rgba(59,60,63,0.4) 40px,transparent 0);background-position:left top,left top,left top,right top,right top,right top,0 0;background-size:50px 45px,90px 45px,130px 45px,50px 30px,50px 45px,50px 60px,100%;background-repeat:no-repeat,no-repeat}.weather34darkbrowser[url]:after{content:attr(url);color:#aaa;font-size:14px;position:absolute;left:0;right:0;top:0;padding:2px 15px;margin:11px 50px 0 90px;border-radius:3px;background:rgba(97, 106, 114, 0.3);height:20px;box-sizing:border-box}


.temperaturecontainer1{position:absolute;left:20px;margin-top:10px;margin-bottom:20px;}

.temperaturecontainer2{position:absolute;left:20px;margin-top:50px}
.temperaturetoday0,.temperaturetoday10,.temperaturetoday18,.temperaturetoday24,.temperaturetoday30,.temperaturetoday12{font-family:weathertext,Arial,Helvetica,system;width:7rem;height:3.5rem;-webkit-border-radius:3px;-moz-border-radius:3px;-o-border-radius:3px;display:flex}
.temperaturetoday0,.temperaturetoday10,.temperaturetoday18,.temperaturetoday24,.temperaturetoday30,.temperaturetoday12{font-size:2rem;padding-top:2px;color:#fff;border-bottom:15px solid rgba(56,56,60,1);align-items:center;justify-content:center;border-radius:3px;margin-bottom:10px;}
.temperaturecaution,.temperaturetrend{position:absolute;font-size:1rem}

.temperaturetoday0{background:rgba(68, 166, 181, 1.000)} .temperaturetoday10{background:rgba(144, 177, 42, 1.000)}.temperaturetoday12{background:rgba(230, 161, 65, 0.8)}.temperaturetoday18{background:rgba(230, 161, 65, 1.000)}.temperaturetoday24{background:rgba(255, 124, 57, 1.000)}.temperaturetoday30{background:rgba(211, 93, 78, 1.000)}
.temperaturetrend{margin-left:15px;margin-top:-23px;z-index:1;color:#fff}
smalluvunit{font-size:.9rem;font-family:Arial,Helvetica,system;}




</style>
</head>
<body>
<div class="weather34darkbrowser" url="Almanac Temperature | Dewpoint Data <?php echo $stationlocation;?>"></div> 
  
<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
               
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
              <div class="temperaturecontainer1">
			  
			  <?php
	//temp max today
	if ($tempunit=='C' && $weather["tempdmax"]>=30)  {
	echo "<div class='temperaturetoday30'>",$weather["tempdmax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempdmax"]>=24)  {
	echo "<div class='temperaturetoday24'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmax"]>=18)  {
	echo "<div class='temperaturetoday18'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmax"]>=12)  {
	echo "<div class='temperaturetoday12'>",$weather["tempdmax"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempdmax"]>=10)  {
	echo "<div class='temperaturetoday10'>",$weather["tempdmax"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempdmax"]<10) {
	echo "<div class='temperaturetoday0'>",$weather["tempdmax"] . "</value>";}		
	
	//F
	if ($tempunit=='F' && $weather["tempdmax"]>=86)  {
	echo "<div class='temperaturetoday30'>",$weather["tempdmax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempdmax"]>=75.2)  {
	echo "<div class='temperaturetoday24'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmax"]>=64.64)  {
	echo "<div class='temperaturetoday18'>",$weather["tempdmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmax"]>=53.6)  {
	echo "<div class='temperaturetoday12'>",$weather["tempdmax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempdmax"]>=50)  {
	echo "<div class='temperaturetoday10'>",$weather["tempdmax"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempdmax"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempdmax"] . "</value>";}
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Max: <?php echo $weather["tempdmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	// temp min today
	if ($tempunit=='C' && $weather["tempdmin"]>=30)  {
	echo "<div class='temperaturetoday30'>",$weather["tempdmin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempdmin"]>=24)  {
	echo "<div class='temperaturetoday24'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmin"]>=18)  {
	echo "<div class='temperaturetoday18'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempdmin"]>=12)  {
	echo "<div class='temperaturetoday12'>",$weather["tempdmin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempdmin"]>=10)  {
	echo "<div class='temperaturetoday10'>",$weather["tempdmin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempdmin"]<10) {
	echo "<div class='temperaturetoday0'>",$weather["tempdmin"] . "</value>";}		
		
	
	//F
	if ($tempunit=='F' && $weather["tempdmin"]>=86)  {
	echo "<div class='temperaturetoday30'>",$weather["tempdmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempdmin"]>=75.2)  {
	echo "<div class='temperaturetoday24'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmin"]>=64.4)  {
	echo "<div class='temperaturetoday18'>",$weather["tempdmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempdmin"]>=53.6)  {
	echo "<div class='temperaturetoday12'>",$weather["tempdmin"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempdmin"]>=50)  {
	echo "<div class='temperaturetoday10'>",$weather["tempdmin"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempdmin"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempdmin"] . "</value>";}
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Min: <?php echo $weather["tempdmintime"];?></span></div>	
</div>

</span> 

<div class="weather34-uvrate-bar" style="margin-top:7px;">	
 <svg iopacity="0.8"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.8"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if( $tempunit=='C' && $weather["tempdmax"]>38){echo "rgba(237, 73, 71, 0.5)";} if( $tempunit=='F' && $weather["tempdmax"]>100){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>35){echo "rgba(237, 73, 71, 0.5)";} else if($tempunit=='F' && $weather["tempdmax"]>95){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>30){echo " rgba(237, 73, 71, 0.5)";} else if($tempunit=='F' && $weather["tempdmax"]>86){echo " rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>27){echo " rgba(255, 69, 1,0.5)";} else if($tempunit=='F' && $weather["tempdmax"]>80.6){echo " rgba(255, 69, 1,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>25){echo " rgba(255, 124, 57, 0.7)";} else if($tempunit=='F' && $weather["tempdmax"]>77){echo " rgba(255, 124, 57, 0.7)";}else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>23){echo " rgba(255, 124, 57, 0.7)";} else if($tempunit=='F' && $weather["tempdmax"]>73.4){echo " rgba(255, 124, 57, 0.7)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>18){echo " rgba(255, 124, 57, 0.8)";} else if($tempunit=='F' && $weather["tempdmax"]>64.4){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>15){echo " rgba(255, 164, 2, 0.8)";} else if($tempunit=='F' && $weather["tempdmax"]>59){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>12){echo " rgba(255, 164, 2, 0.8)";} else if($tempunit=='F' && $weather["tempdmax"]>53.6){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>=10){echo " rgba(254, 255, 3,0.5)";} else if($tempunit=='F' && $weather["tempdmax"]>=50){echo " rgba(254, 255, 3,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>=5){echo " rgba(4, 255, 170,0.5)";} else if($tempunit=='F' && $weather["tempdmax"]>41){echo "rgba(4, 255, 170,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempdmax"]>-50){echo "rgba(0, 153, 170, 1)";} else if($tempunit=='F' && $weather["tempdmax"]>-50){echo "rgba(0, 153, 170, 1)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
 
 

    <div class=hitempypos>        
  <div class="hitempy">Dewpoint <orange>Max</orange> <orange><?php echo $weather["dewmax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewmaxtime"];?></span></div>
<div class="hitempy">Dewpoint <blue>Min</blue> <blue><?php echo $weather["dewmin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewmintime"];?></span></div>
</div>
  
              </div>          
            
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-text">
                
            </div>
        </div>
     <div class="weather34card__stuff-container">
            
<div class="weather34card__stuff-text"> 	
</div> </div>

<div class="actual">Today</div>
</div></div></div>
    </div>
    
    
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
            
    <div class="temperaturecontainer1">
			  
			  <?php
	// twmp max month
	if ($tempunit=='C' && $weather["tempmmax"]>=30)  {
	echo "<div class='temperaturetoday30'>",$weather["tempmmax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempmmax"]>=24)  {
	echo "<div class='temperaturetoday24'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmax"]>=18)  {
	echo "<div class='temperaturetoday18'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmax"]>=12)  {
	echo "<div class='temperaturetoday12'>",$weather["tempmmax"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempmmax"]>=10)  {
	echo "<div class='temperaturetoday10'>",$weather["tempmmax"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempmmax"]<10) {
	echo "<div class='temperaturetoday0'>",$weather["tempmmax"] . "</value>";}		
	
	//F
	if ($tempunit=='F' && $weather["tempmmax"]>=86)  {
	echo "<div class='temperaturetoday30'>",$weather["tempmmax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempmmax"]>=75.2)  {
	echo "<div class='temperaturetoday24'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmax"]>=64.64)  {
	echo "<div class='temperaturetoday18'>",$weather["tempmmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmax"]>=53.6)  {
	echo "<div class='temperaturetoday12'>",$weather["tempmmax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempmmax"]>=50)  {
	echo "<div class='temperaturetoday10'>",$weather["tempmmax"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempmmax"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempmmax"] . "</value>";}
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend"><?php echo $weather["tempmmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	// temp min today
	if ($tempunit=='C' && $weather["tempmmin"]>=30)  {
	echo "<div class='temperaturetoday30'>",$weather["tempmmin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempmmin"]>=24)  {
	echo "<div class='temperaturetoday24'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmin"]>=18)  {
	echo "<div class='temperaturetoday18'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempmmin"]>=12)  {
	echo "<div class='temperaturetoday12'>",$weather["tempmmin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempmmin"]>=10)  {
	echo "<div class='temperaturetoday10'>",$weather["tempmmin"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempmmin"]<10) {
	echo "<div class='temperaturetoday0'>",$weather["tempmmin"] . "</value>";}		
	
	//F
	if ($tempunit=='F' && $weather["tempmmin"]>=86)  {
	echo "<div class='temperaturetoday30'>",$weather["tempmmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempmmin"]>=75.2)  {
	echo "<div class='temperaturetoday24'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmin"]>=64.4)  {
	echo "<div class='temperaturetoday18'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmin"]>=53.6)  {
	echo "<div class='temperaturetoday12'>",$weather["tempmmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempmmin"]>=50)  {
	echo "<div class='temperaturetoday10'>",$weather["tempmmin"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempmmin"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempmmin"] . "</value>";}
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend"><?php echo $weather["tempmmintime"];?></span></div>	         
            
            
            
            
            
            <div class="weather34-uvrate-bar" style="margin-top:-85px;"> 	
<svg iopacity="0.8"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.8"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if( $tempunit=='C' && $weather["tempmmax"]>38){echo "rgba(237, 73, 71, 0.5)";} if( $tempunit=='F' && $weather["tempmmax"]>100){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>35){echo "rgba(237, 73, 71, 0.5)";} else if($tempunit=='F' && $weather["tempmmax"]>95){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>30){echo " rgba(237, 73, 71, 0.5)";} else if($tempunit=='F' && $weather["tempmmax"]>86){echo " rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>27){echo " rgba(255, 69, 1,0.5)";} else if($tempunit=='F' && $weather["tempmmax"]>80.6){echo " rgba(255, 69, 1,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>25){echo " rgba(255, 124, 57, 0.7)";} else if($tempunit=='F' && $weather["tempmmax"]>77){echo " rgba(255, 124, 57, 0.7)";}else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>23){echo " rgba(255, 124, 57, 0.7)";} else if($tempunit=='F' && $weather["tempmmax"]>73.4){echo " rgba(255, 124, 57, 0.7)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>18){echo " rgba(255, 124, 57, 0.8)";} else if($tempunit=='F' && $weather["tempmmax"]>64.4){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>15){echo " rgba(255, 164, 2, 0.8)";} else if($tempunit=='F' && $weather["tempmmax"]>59){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>12){echo " rgba(255, 164, 2, 0.8)";} else if($tempunit=='F' && $weather["tempmmax"]>53.6){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>=10){echo " rgba(254, 255, 3,0.5)";} else if($tempunit=='F' && $weather["tempmmax"]>=50){echo " rgba(254, 255, 3,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>=5){echo " rgba(4, 255, 170,0.5)";} else if($tempunit=='F' && $weather["tempmmax"]>41){echo "rgba(4, 255, 170,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempmmax"]>-50){echo "rgba(0, 153, 170, 1)";} else if($tempunit=='F' && $weather["tempmmax"]>-50){echo "rgba(0, 153, 170, 1)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
            
            
            
            

<div class=hitempypos1> 
 <div class="hitempy">Dewpoint <orange>Max</orange> <orange><?php echo $weather["dewmmax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewmmaxtime"];?></span></div>
<div class="hitempy">Dewpoint <blue>Min</blue> <blue><?php echo $weather["dewmmin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewmmintime"];?></span></div>
</div>
            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--bigs">    
               
            
                

            </div>
        </div><br>
        <div class="weather34card__stuff-container">
           
             
<div class="actual"><?php echo date('F');?></div>
</section>

<section class="weather34cards">
   <div class="weather34card weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="margin-top:0;"> 	
  <svg iopacity="0.8"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.8"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if( $tempunit=='C' && $weather["tempydmax"]>38){echo "rgba(237, 73, 71, 0.5)";} if( $tempunit=='F' && $weather["tempydmax"]>100){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>35){echo "rgba(237, 73, 71, 0.5)";} else if($tempunit=='F' && $weather["tempydmax"]>95){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>30){echo " rgba(237, 73, 71, 0.5)";} else if($tempunit=='F' && $weather["tempydmax"]>86){echo " rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>27){echo " rgba(255, 69, 1,0.5)";} else if($tempunit=='F' && $weather["tempydmax"]>80.6){echo " rgba(255, 69, 1,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>25){echo " rgba(255, 124, 57, 0.7)";} else if($tempunit=='F' && $weather["tempydmax"]>77){echo " rgba(255, 124, 57, 0.7)";}else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>23){echo " rgba(255, 124, 57, 0.7)";} else if($tempunit=='F' && $weather["tempydmax"]>73.4){echo " rgba(255, 124, 57, 0.7)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>18){echo " rgba(255, 124, 57, 0.8)";} else if($tempunit=='F' && $weather["tempydmax"]>64.4){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>15){echo " rgba(255, 164, 2, 0.8)";} else if($tempunit=='F' && $weather["tempydmax"]>59){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>12){echo " rgba(255, 164, 2, 0.8)";} else if($tempunit=='F' && $weather["tempydmax"]>53.6){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>=10){echo " rgba(254, 255, 3,0.5)";} else if($tempunit=='F' && $weather["tempydmax"]>=50){echo " rgba(254, 255, 3,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>=5){echo " rgba(4, 255, 170,0.5)";} else if($tempunit=='F' && $weather["tempydmax"]>41){echo "rgba(4, 255, 170,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempydmax"]>-50){echo "rgba(0, 153, 170, 1)";} else if($tempunit=='F' && $weather["tempydmax"]>-50){echo "rgba(0, 153, 170, 1)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</svg></div>
 
            
            
            
            <div class="temperaturecontainer1">
			  
			  <?php
	// temp max yesterday
	if ($tempunit=='C' && $weather["tempydmax"]>=30)  {
	echo "<div class='temperaturetoday30'>",$weather["tempydmax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempydmax"]>=24)  {
	echo "<div class='temperaturetoday24'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmax"]>=18)  {
	echo "<div class='temperaturetoday18'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmax"]>=12)  {
	echo "<div class='temperaturetoday12'>",$weather["tempydmax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempydmax"]>=10)  {
	echo "<div class='temperaturetoday10'>",$weather["tempydmax"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempydmax"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempydmax"] . "</value>";}		
	
	//F
	if ($tempunit=='F' && $weather["tempydmax"]>=86)  {
	echo "<div class='temperaturetoday30'>",$weather["tempydmax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempydmax"]>=75.2)  {
	echo "<div class='temperaturetoday24'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmax"]>=64.64)  {
	echo "<div class='temperaturetoday18'>",$weather["tempydmax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmax"]>=53.6)  {
	echo "<div class='temperaturetoday12'>",$weather["tempydmax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempydmax"]>=50)  {
	echo "<div class='temperaturetoday10'>",$weather["tempydmax"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempydmax"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempydmax"] . "</value>";}
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Max: <?php echo $weather["tempydmaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	// temp min yesterday
	if ($tempunit=='C' && $weather["tempydmin"]>=30)  {
	echo "<div class='temperaturetoday30'>",$weather["tempydmin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempydmin"]>=24)  {
	echo "<div class='temperaturetoday24'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmin"]>=18)  {
	echo "<div class='temperaturetoday18'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmin"]>=12)  {
	echo "<div class='temperaturetoday12'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempydmin"]>=10)  {
	echo "<div class='temperaturetoday10'>",$weather["tempydmin"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempydmin"]<10) {
	echo "<div class='temperaturetoday0'>",$weather["tempydmin"] . "</value>";}		
	
	if ($tempunit=='F' && $weather["tempydmin"]>=86)  {
	echo "<div class='temperaturetoday30'>",$weather["tempydmin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempydmin"]>=75.2)  {
	echo "<div class='temperaturetoday24'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmin"]>=64.4)  {
	echo "<div class='temperaturetoday18'>",$weather["tempydmin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempydmin"]>=53.6)  {
	echo "<div class='temperaturetoday12'>",$weather["tempydmin"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempydmin"]>=50)  {
	echo "<div class='temperaturetoday10'>",$weather["tempydmin"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempydmin"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempydmin"] . "</value>";}
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend">Min: <?php echo $weather["tempydmintime"];?></span></div>	         
            
            
    <div class=hitempypos1>        
  <div class="hitempy">Dewpoint <orange>Max</orange> <orange><?php echo $weather["dewydmax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewydmaxtime"];?></span></div>
<div class="hitempy">Dewpoint <blue>Min</blue> <blue><?php echo $weather["dewydmin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewydmintime"];?></span></div>
</div>

            </div> </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
            
<div class="actual">Yesterday</div></div></div></div></div>
    <div class="weather34card weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          <div class="weather34-uvrate-bar" style="margin-top:0;"> 	
  <svg iopacity="0.8"  d="weather34 solar radiation svg" width="40pt" height="80pt" viewBox="0 0 44 84">
<path fill="currentcolor"  opacity="0.8"  d=" M 0.00 7.99 C 1.33 8.00 2.67 8.00 4.00 8.01 C 4.01 31.34 3.99 54.67 4.00 77.99 C 16.00 78.01 28.00 78.00 40.00 78.00 C 40.01 54.67 39.99 31.34 40.00 8.01 C 41.34 8.00 42.67 8.00 44.00 7.99 L 44.00 9.95 C 43.50 9.97 42.50 10.02 42.00 10.05 C 42.00 33.36 42.00 56.68 42.00 80.00 C 28.67 80.01 15.34 80.00 2.01 80.00 C 1.99 56.70 2.00 33.40 2.00 10.10 C 1.50 10.04 0.50 9.92 0.00 9.86 L 0.00 7.99 Z" />
<path fill="<?php if( $tempunit=='C' && $weather["tempymax"]>38){echo "rgba(237, 73, 71, 0.5)";} if( $tempunit=='F' && $weather["tempymax"]>100){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 8.01 C 17.00 8.00 27.00 8.00 37.00 8.00 C 37.00 8.75 37.00 10.25 37.00 11.00 C 27.00 11.00 17.00 11.00 7.00 11.00 C 7.00 10.25 7.00 8.75 7.00 8.01 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>35){echo "rgba(237, 73, 71, 0.5)";} else if($tempunit=='F' && $weather["tempymax"]>95){echo "rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 12.00 C 17.00 12.00 27.00 12.00 37.00 12.00 C 37.00 13.67 37.00 15.33 37.00 17.00 C 27.00 17.00 17.00 17.00 7.00 17.00 C 7.00 15.33 7.00 13.67 7.00 12.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>30){echo " rgba(237, 73, 71, 0.5)";} else if($tempunit=='F' && $weather["tempymax"]>86){echo " rgba(237, 73, 71, 0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 18.00 C 17.00 18.00 27.00 18.00 37.00 18.00 C 37.00 19.67 37.00 21.33 37.00 23.00 C 27.00 23.00 17.00 23.00 7.00 23.00 C 7.00 21.33 7.00 19.67 7.00 18.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>27){echo " rgba(255, 69, 1,0.5)";} else if($tempunit=='F' && $weather["tempymax"]>80.6){echo " rgba(255, 69, 1,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 24.00 C 17.00 24.00 27.00 24.00 37.00 24.00 C 37.00 25.67 37.00 27.33 37.00 29.00 C 27.00 29.00 17.00 29.00 7.00 29.00 C 7.00 27.33 7.00 25.67 7.00 24.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>25){echo " rgba(255, 124, 57, 0.7)";} else if($tempunit=='F' && $weather["tempymax"]>77){echo " rgba(255, 124, 57, 0.7)";}else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 30.00 C 17.00 30.00 27.00 30.00 37.00 30.00 C 37.00 31.67 37.00 33.33 37.00 35.00 C 27.00 35.00 17.00 35.00 7.00 35.00 C 7.00 33.33 7.00 31.67 7.00 30.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>23){echo " rgba(255, 124, 57, 0.7)";} else if($tempunit=='F' && $weather["tempymax"]>73.4){echo " rgba(255, 124, 57, 0.7)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 36.00 C 17.00 36.00 27.00 36.00 37.00 36.00 C 37.00 37.67 37.00 39.33 37.00 41.00 C 27.00 41.00 17.00 41.00 7.00 41.00 C 7.00 39.33 7.00 37.67 7.00 36.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>18){echo " rgba(255, 124, 57, 0.8)";} else if($tempunit=='F' && $weather["tempymax"]>64.4){echo " rgba(255, 124, 57, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 42.00 C 17.00 41.99 27.00 42.00 37.00 42.00 C 37.00 43.67 37.00 45.33 37.00 47.00 C 27.00 47.00 17.00 47.00 7.00 47.00 C 7.00 45.33 7.00 43.67 7.00 42.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>15){echo " rgba(255, 164, 2, 0.8)";} else if($tempunit=='F' && $weather["tempymax"]>59){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 48.00 C 17.00 48.00 27.00 48.00 37.00 48.00 C 37.00 49.67 37.00 51.33 37.00 53.00 C 27.00 53.00 17.00 53.00 7.00 53.00 C 7.00 51.33 7.00 49.67 7.00 48.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>12){echo " rgba(255, 164, 2, 0.8)";} else if($tempunit=='F' && $weather["tempymax"]>53.6){echo " rgba(255, 164, 2, 0.8)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 54.00 C 17.00 54.00 27.00 54.00 37.00 54.00 C 37.00 55.67 37.00 57.33 37.00 59.00 C 27.00 59.00 17.00 59.00 7.00 59.00 C 7.00 57.33 7.00 55.67 7.00 54.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>=10){echo " rgba(254, 255, 3,0.5)";} else if($tempunit=='F' && $weather["tempymax"]>=50){echo " rgba(254, 255, 3,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 60.00 C 17.00 60.00 27.00 60.00 37.00 60.00 C 37.00 61.67 37.00 63.33 37.00 65.00 C 27.00 65.00 17.00 65.00 7.00 65.00 C 7.00 63.33 7.00 61.67 7.00 60.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>=5){echo " rgba(4, 255, 170,0.5)";} else if($tempunit=='F' && $weather["tempymax"]>41){echo "rgba(4, 255, 170,0.5)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 66.00 C 17.00 66.00 27.00 66.00 37.00 66.00 C 37.00 67.67 37.00 69.33 37.00 71.00 C 27.00 71.00 17.00 71.00 7.00 71.00 C 7.00 69.33 7.00 67.67 7.00 66.00 Z" />
<path fill="<?php if($tempunit=='C' && $weather["tempymax"]>-50){echo "rgba(0, 153, 170, 1)";} else if($tempunit=='F' && $weather["tempymax"]>-50){echo "rgba(0, 153, 170, 1)";} else echo "currentcolor"?>"   opacity="0.8"  d=" M 7.00 72.00 C 17.00 72.00 27.00 72.00 37.00 72.00 C 37.00 73.67 37.00 75.33 37.00 77.00 C 27.00 77.00 17.00 77.00 7.00 77.00 C 7.00 75.33 7.00 73.67 7.00 72.00 Z" /></svg>
</div>
 
            
            
             <div class="temperaturecontainer1">
			  
			  <?php
	// temp max year
	if ($tempunit=='C' && $weather["tempymax"]>=30)  {
	echo "<div class='temperaturetoday30'>",$weather["tempymax"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempymax"]>=24)  {
	echo "<div class='temperaturetoday24'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymax"]>=18)  {
	echo "<div class='temperaturetoday18'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymax"]>=12)  {
	echo "<div class='temperaturetoday12'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymax"]>=10)  {
	echo "<div class='temperaturetoday10'>",$weather["tempymax"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempymax"]<10) {
	echo "<div class='temperaturetoday0'>",$weather["tempymax"] . "</value>";}		
	
	//F
	if ($tempunit=='F' && $weather["tempymax"]>=86)  {
	echo "<div class='temperaturetoday30'>",$weather["tempymax"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempymax"]>=75.2)  {
	echo "<div class='temperaturetoday24'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymax"]>=64.64)  {
	echo "<div class='temperaturetoday18'>",$weather["tempymax"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymax"]>=53.6)  {
	echo "<div class='temperaturetoday12'>",$weather["tempymax"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempymax"]>=50)  {
	echo "<div class='temperaturetoday10'>",$weather["tempymax"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempymax"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempymax"] . "</value>";}
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend"><?php echo $weather["tempymaxtime"];?></span></div>	
			</div>  
			  
			  
<div class="temperaturecontainer2">
 <?php
	// temp min year
	if ($tempunit=='C' && $weather["tempymin"]>=30)  {
	echo "<div class='temperaturetoday30'>",$weather["tempymin"] . "</value>";} 	
	else if ($tempunit=='C' && $weather["tempymin"]>=24)  {
	echo "<div class='temperaturetoday24'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymin"]>=18)  {
	echo "<div class='temperaturetoday18'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='C' && $weather["tempymin"]>=12)  {
	echo "<div class='temperaturetoday12'>",$weather["tempymin"] . "</value>";} 
	else if ($tempunit=='C' && $weather["tempymin"]>=10)  {
	echo "<div class='temperaturetoday10'>",$weather["tempymin"] . "</value>";} 		
	else if ($tempunit=='C' && $weather["tempymin"]<10) {
	echo "<div class='temperaturetoday0'>",$weather["tempymin"] . "</value>";}		
	
	if ($tempunit=='F' && $weather["tempymin"]>=86)  {
	echo "<div class='temperaturetoday30'>",$weather["tempymin"] . "</value>";} 	
	else if ($tempunit=='F' && $weather["tempymin"]>=75.2)  {
	echo "<div class='temperaturetoday24'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymin"]>=64.4)  {
	echo "<div class='temperaturetoday18'>",$weather["tempymin"] . "</value>";}
	else if ($tempunit=='F' && $weather["tempymin"]>=53.60)  {
	echo "<div class='temperaturetoday12'>",$weather["tempymin"] . "</value>";} 
	else if ($tempunit=='F' && $weather["tempymin"]>=50)  {
	echo "<div class='temperaturetoday10'>",$weather["tempymin"] . "</value>";} 		
	else if ($tempunit=='F' && $weather["tempymin"]<50) {
	echo "<div class='temperaturetoday0'>",$weather["tempymin"] . "</value>";}
	echo "<smalluvunit>".$weather["temp_units"]."</smalluvunit>"
	?> </div>
    
    <div class="temperaturetrend"><?php echo $weather["tempymintime"];?></span></div>	         
            
            
<div class=hitempypos1> 
<div class="hitempy">Dewpoint <orange>Max</orange> <orange><?php echo $weather["dewymax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewymaxtime"];?></span></div>
<div class="hitempy">Dewpoint <blue>Min</blue> <blue><?php echo $weather["dewymin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewymintime"];?></span></div>
</div>






</div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
<div class="actual"><?php echo date('Y');?></div>
</section>




<section class="weather34cards">
   <div class="weather34card2 weather34card--earthquake1">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          
            
            
            

</span> <div class="hitemp">


<div class=hitempalltimepos> 
<div class="hitempa">Temperature <orange>Max</orange> alltime <orange><?php echo $weather["tempamax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["tempamaxtime"];?></span></div>
<div class="hitempa">Temperature <blue>Min</blue> alltime <blue><?php echo $weather["tempamin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["tempamintime"];?></span></div>
</div>

            </div> </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
           
            
<div class="actual1"><orange>Temperature</orange> 2018-<?php echo date('Y')?></div></div></div></div></div>
   
   
    <div class="weather34card2 weather34card--earthquake2">
               <div class="weather34card_weather34-container">
            <div class="weather34card_weather34-wrapper"><span class="weather34card__count-text--big">
          
            
            

</span> 
<div class=hitempalltimepos> 
<div class="hitempa">Dewpoint <orange>Max</orange> alltime <orange><?php echo $weather["dewamax"],"</orange>&deg;",$weather["temp_units"]," ",$weather["dewamaxtime"];?></span></div>
<div class="hitempa">Dewpoint <blue>Min</blue> alltime <blue><?php echo $weather["dewamin"],"</blue>&deg;",$weather["temp_units"]," ",$weather["dewamintime"];?></span></div>


</div>

            </div>
        </div>
        <div class="weather34card__count-container">
            <div class="weather34card__count-textuv">
                <span class="weather34card__count-text--big">  </span></div>  
          <div class="weather34card__stuff-container"><br>
     <div class="actual1"><blue>Dewpoint</blue> 2018-<?php echo date('Y')?></div></div></div></div></div>      

</section>








<div class="provided">   
&nbsp;<?php echo $info?> 
Temperature/Dewpoint Almanac Meteobridge CSS/SVG/PHP scripts by <a href="https://weather34.com" title="weather34.com" target="_blank">weather34.com  &copy; 2015-<?php echo date('Y');?></a></div>
</body>
</html>