# Home Weather Station weather website template for WeeWX

This repository contains the current version of Brian Underdown's Home Weather Station weather website template set.
Brian's main website is https://weather34.com/homeweatherstation/index.html
In January, 2019, Brian has asked others to distribute/maintain his code for other weather station software,
and is only supporting Meteobridge/Meteobridge NANO-SD versions of the HWS template.

This version requires WeeWX software with the CRT extension for data feeds for the conditions 
from your personal weather station.  weeWX is available at http://weewx.com

This version is designed explicitly to harness the WeeWX database to generate the weather data charts. It is a specially modified version of CU-HWS maintained by Ken True (https://github.com/ktrue/CU-HWS)

If you are happy to use Weather Underground as a source of data for chart generation you are strongly recommended to use the Ken True CU-HWS version which can be configured out-of-the-box to be used with WeeWX.

# Demo

A live example of this template can be seen at https://claydonsweather.org.uk

# Weather Underground

* Towards the end of 2018 Weather Underground anounced that it was ending its free API. Earlier versions of this template relied upon this facility for data that users had freely supplied Weather Underground to drive the pop-up data charts. It is still very unclear what the future situation may look like. With this in mind, this new version of the template allows users to select whether thay opt to continue using Weather Underground or retrieve that same data from their own weeWX database. That choice is may through the easyweathersetup page (settings from the menu). Additional configurations need to be made in weeWX; full instructions on how to do this will be found in the ARCHIVE-CHARTS-SETUP-GUIDE. You can see these charts working at https://claydonsweather.org.uk


# Setup

* Follow the instructions in the quick setup guide to install the template.
* Browse to http://your.website/easyweathersetup.php
* There is no initial password when the page prompts the first time -- just press LOGIN to enter the page.
* ***IMPORTANT*** set a password in the screen for future use -- your browser can remember it. This will 
make future updates reasonably secure so only you can do the updates to the configuration.
* Make setting entries in the easyweathersetup.php page and SAVE.  The next time you run it, use the password you set in the step above.
* Repeat running easyweathersetup.php until the main screen appears as you like it.

# Diagnostics

A new utility diags.php was added to the distribution.  It is useful for checking the installation of the WX-HWS template
and showing (safely) the current settings.php/settings1.php file contents for debugging.  Note: the entries for
$password, $db_user, $db_pass are replaced with '********' to avoid unwanted disclosure of private information.

* run ***diags.php?show=info*** on your website to show the key info about the WX-HWS installation and required PHP function status
* run ***diags.php?show=settings*** on your website to safely show the current settings.php and settings1.php contents


# License

Copyright (c) 2016-2018 by Brian Underdown (https://weather34.com)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Template”), to deal in the Template without restriction, including without limitation the rights to, can use, can not copy without prior permission, can modify for personal use, can use and publish for personal use ,can not distribute without prior permission, can not sublicense without prior permission, and can not sell copies of the Template, and subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Template.

THE TEMPLATE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NON INFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE TEMPLATE OR THE USE OR OTHER DEALINGS IN THE TEMPLATE.

Attribution-NonCommercial 4.0 International based on a work at https://weather34.com/homeweatherstation

# Non-weeWX versions Available  

* **Cumulus Version** available via download and more info supported by Ken True ( https://github.com/ktrue/CU-HWS ). This version now also supports WeeWX and WeatherCat

* **Weatherflow API Version** **Discontinued** Please use meteobridge version if you have a meteobridge product, it offers more versatile options over the API and faster updates and better history/chart outputs or alternatively try the version for Weather Display below by Wim van der Kuil

* **Raspberry Pi Python Weatherflow console version** available via here supported download via by Peter Davis ( Weatherflow Forum )
https://github.com/peted-davis/WeatherFlow_PiConsole

* **Davis WeatherLink version** by Mats Ahlklo supports WL 2.0 details here
http://pysselilivet.blogspot.com/2017/01/install-weather34-with-weatherlink.html

* **ATMOCOM Version** for Ambient WS-2902 Osprey,Ventus W830, MiSol, ChiliTec, PanTech, Froggit WH3000, Ambient WS-8478 Falcon, Bresser,FOSHK HP-3500 series info here
https://atmocom.com/Demo-weather-data

* **Weather Display version** by Wim van der Kuil  Now Available via 
https://wd34.weather-template.com/. This version also now supports Cumulus, WeeWX and WeatherCat.

## Brian's note
A note from Brian 2-Jan-2019 (quoted from [here](https://www.wxforum.net/index.php?topic=29817.msg366998#msg366998)):

>Features and appearance may vary across these versions and requests for additions should go to the individual maintaining these.. there are two other versions not quite ready for release but are based on using the Rasperry Pi.

>The only supported (by weather34) versions are [Meteobridge](https://www.meteobridge.com/wiki/index.php/Home) and the current running beta for [Meteobridge NANO-SD](https://www.meteobridge.com/wiki/index.php/Meteobridge_NANO_SD). 
These versions are rich in features and additional features are added when time permits 
(a lot was added to the beta version in December 2018 it now supports 150 types of data variables,
whole array of chart data for those with lots historical data with more to come). 

>The current Meteobridge NANO-SD beta version has lots of historical options and almanac pop ups for various data.
You will also find a version maintained by Meteobridge developer (Boris) built into the NANO-SD product which doesn't require a web server as it merely runs inside the Meteobridge NANO-SD control panel.

## Updates from Brian (weather34) - 13-Jan-2019

These changes are basically direct from Meteobridge version as Cumulus, weeWX and Meteobridge
use nigh on identical structure and require no major time consuming modifications, just direct file replacement.
This basically brings the same visual layout up-to date as seen in Meteobridge versions.

- indoortemperature.php
- homeindoor.php
- css folder - all (2) .css files updated, multiple .svg icons also
- index.php (added new logo for Davis option)
- img folder *new davis svg icon (designedfor.svg designed by weather34 was removed)
- weather34uvsolar.php
- solaruvds.php
- rainfall-year-month.php
- max-mintemp.php
- max-minwind.php

Also a .gitignore file was added to the distribution to help prevent clobbering your settings/data from your station on a future 
'git pull' operation.

Apart from Brian Underdown without him, this template would never exist, I would aslo like to acknowledge the following people: -

Ken True for sharing files and who makes my job of maintaining the weeWX version so much easier.

David M. for contributing technical knowledge and solutions to create the wxchart .tmpl files.

Taylormia for contributing his excellent setup example for instances where weeWX and server/template are remote to each other.

All those unamed people who have helped me with testing updates
 
