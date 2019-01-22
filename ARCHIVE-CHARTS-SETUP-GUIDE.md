# HOW TO USE THE WEEWX ARCHIVE DATABASE TO GENERATE THE POP-UP CanvasJS CHARTS.

* Please familiarise yourself with the location of your weewx.conf and Standard/skin.conf files. For a DEB installation without any modification these will be found at '/etc/weewx/weewx.conf' and '/etc/weewx/skins/Standard/skin.conf' respectively. You might find your 'skins' folder in your web root if you followed an earlier version of this guide.

* Open the skin.conf file and find the '[CheetahGenerator]' section. At the bottom of this section append the following: -

(copy and paste)

	   
	   [[WXCHARTDATA]]
	   
	       [[[DAILYCHARTS]]]
	            encoding = strict_ascii	
                    template = wxchartdata/DDMMYYYY.csv.tmpl
                    HTML_ROOT = /var/www/html/weewx

        # Reports that summarize "by month"
                [[[MONTHLYCHARTS]]]
                    encoding = strict_ascii
                    template = wxchartdata/MMYYYY.csv.tmpl
                    HTML_ROOT = /var/www/html/weewx

        # Reports that summarize "by year"
                [[[YEARLYCHARTS]]]
                    encoding = strict_ascii
                    template = wxchartdata/YYYY.csv.tmpl
                    HTML_ROOT = /var/www/html/weewx

* In the download you will find a folder called 'copy_folder_inside_to_skins_Standard_folder'. Inside is a folder called 'wxchartdata'. Move  or copy 'wxchartdata' to your skins/Standard folder.


# IMPORTANT
* Please ensure that your [Groups] settings in the [Units] section are identical in both your weewx.conf file and skins.conf file.

* Once complete and everyting is saved, please restart weeWX.
