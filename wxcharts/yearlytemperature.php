<?php
	include('../common.php');		
	####################################################################################################
	#	WUDATACHARTS by BRIAN UNDERDOWN 2016                                                           #
	#	CREATED FOR HOMEWEATHERSTATION TEMPLATE at http://weather34.com/homeweatherstation/index.html  # 
	# 	                                                                                               #
	# 	built on CanvasJs  	                                                                           #
	#   canvasJs.js is protected by CREATIVE COMMONS LICENCE BY-NC 3.0  	                           #
	# 	free for non commercial use and credit must be left in tact . 	                               #
	# 	                                                                                               #
	# 	Weather Data is based on your PWS upload quality collected at Weather Underground 	           #
	# 	                                                                                               #
	# 	Second General Release: 4th October 2016  	                                                   #
	# 	                                                                                               #
	#   http://www.weather34.com 	                                                                   #
	####################################################################################################
	
	include('../settings.php');include('conversion.php');	
    echo '
<!doctype html public "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>OUTDOOR YEAR TEMPERATURE DATABASE CHART</title>	
		<script src=../js/jquery.js></script>
		<script src=canvasJs.js></script>
	';
	
	$date= date('D jS Y');	$weatherfile = date('Y');	?>
    <br>
    	<script type="text/javascript">
        $(document).ready(function () {
		var dataPoints1 = [];
		var dataPoints2 = [];
	                         
		$.ajax({
			type: "GET",
			url: "..//weewx/wxchartdata/<?php echo $weatherfile;?>.csv",
			dataType: "text",
			cache:false,
			success: function(data) {processData1(data),processData2(data);}
		});

	
		function processData1(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 2; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
						dataPoints1.push({label:moment(rowData[0],'YYYY-MM-DD').format("MMM Do"),y:<?php echo $temperatureconvhi ;?>)});
			}
		}
		requestTempCsv();}	function requestTempCsv(){}

	function processData2(allText) {
		var allLinesArray = allText.split('\n');
		if(allLinesArray.length>0){
			
			for (var i = 2; i <= allLinesArray.length-1; i++) {
				var rowData = allLinesArray[i].split(',');
				if ( rowData.length >1)
					dataPoints2.push({label:moment(rowData[0],'YYYY-MM-DD').format("MMM Do"),y:<?php echo $temperatureconvlo ;?>)});
				
			}
			drawChart(dataPoints1 , dataPoints2 );
		}
	}

	

	function drawChart( dataPoints1 , dataPoints2 ) {
		var chart = new CanvasJS.Chart("chartContainer", {
		 backgroundColor: "#fff",
		 animationEnabled: true,
		 
		title: {
            text: " ",
			fontSize: 12,
			fontColor:'#555',
			fontFamily: "arial",
        },
		toolTip:{
			   fontStyle: "normal",
			   cornerRadius: 4,
			   backgroundColor: "#fff",
			   
			   toolTipContent: " x: {x} y: {y} <br/> name: {name}, label:{label}" ,
			   shared: true, 
			   
			   
  
 },
		axisX: {
			gridColor: "#aaa",
            gridDashType: "dot",
		    labelFontSize: 10,
			labelFontColor:' #555',
			lineThickness: 0.5,
			gridThickness: 1,	
			titleFontFamily: "arial",	
			labelFontFamily: "arial",
			interval:31,	
			
					
					
			},
			
		axisY:{
		title: "<?php echo $lang['Temperature'] ;?> (<?php echo $tempunit ;?>)",
		titleFontColor: "#555",
        gridDashType: "dot",
		titleFontSize: 10,
        titleWrap: false,
		margin: 10,
		lineThickness: 0.5,		
		gridThickness: 1,		
        includeZero: false,
		gridColor: "#aaa",
		labelFontSize: 11,
		labelFontColor:' #555',
        gridDashType: "dot",
		titleFontFamily: "arial",
		labelFontFamily: "arial",
		labelFormatter: function ( e ) {
        return e.value .toFixed(1) + " <?php echo $tempunit ;?>" ;  
         },		 
		 
      },
	  
	  legend:{
      fontFamily: "arial",
      fontColor:"#555",
  
 },
		
		
		data: [
		{
			//type: "spline",
			type: "column",
			color:"#ff9350",
			markerSize:2,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 2,
			markerType: "circle",			
			name:" <?php echo $lang['Temperature'] ;?> Hi",
			dataPoints: dataPoints1,
			yValueFormatString: "#0.# <?php echo $tempunit ;?>",
			
		},
		{
			type: "splineArea",
			color:"#00A4B4",
			markerSize:2,
			showInLegend:true,
			legendMarkerType: "circle",
			lineThickness: 2,
			markerType: "circle",
			name:" <?php echo $lang['Temperature'] ;?> Lo",
			dataPoints: dataPoints2,
			yValueFormatString: "#0.# <?php echo $tempunit ;?>",
			
		}

		]
		});

		chart.render();
	}
});

    </script>
    
</head>
 <link rel="stylesheet" href="weather34chartstyle.css?ver=3.0">
<body>
<div class="weather34darkbrowser" url="<?php echo $stationlocation ;?> <?php echo $lang['Temperature'] ;?>  (<?php echo $tempunit ;?>) <?php echo date('Y') ;?>"></div>
<div style="width:auto;background:0;padding:0px;margin-left:5px;font-size: 12px;border-radius:3px;">
<div id="chartContainer" class="chartContainer"></div></div>
<div class="weather34browser-footer">
<span style="position:absolute;color:#fff;font-size:10px;font-family:arial;padding-top:5px;margin-left:25px;border-radius:3px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg>
<a href="https://weather34.com/homeweatherstation/" title="https://weather34.com" target="_blank"> 
<span style="color:#00A4B4;"><?php echo $chartversionsqlite  ;?> CSS & PHP scripts by weather34</span> </a></span>
<span style="position:absolute;color:#aaa;font-size:10px;font-family:arial;padding-top:5px;margin-left:25px;display:block;margin-top:12px;">
&nbsp;
<svg id="i-external" viewBox="0 0 32 32" width="10" height="10" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="6.25%">
<path d="M14 9 L3 9 3 29 23 29 23 18 M18 4 L28 4 28 14 M28 4 L14 18" /></svg> 
<a href="https://canvasjs.com" title="https://canvasjs.com" target="_blank"><?php echo $creditschart ;?> </a></span>
<div class="weather34browser-footerlogo"><a href="https://weather34.com/homeweatherstation/" title="https://weather34.com/homeweatherstation/" target="_blank"><img src="../img/weatherlogo34.svg" width="35px"</img></a></div></div>
</body>
<script src='canvasJs.js'></script>
</html>
