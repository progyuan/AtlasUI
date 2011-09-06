<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#">
	<head>
			<link rel="stylesheet" type="text/css" href="/Framework/all.css" />
			<link rel="stylesheet" type="text/css" href="/Framework/custom.css" />
			<link rel="stylesheet" type="text/css" href="../Framework/all.css" />
			<link rel="stylesheet" type="text/css" href="../Framework/custom.css" />
	</head>
	<body>
	
		<?php

		  /* Import Framework Stylesheets */

			print "<link rel=\"stylesheet\" type=\"text/css\" href=\"/Framework/all.css\" />";
			print "<link rel=\"stylesheet\" type=\"text/css\" href=\"/Framework/custom.css\" />";
			print "<link rel=\"stylesheet\" type=\"text/css\" href=\"../Framework/all.css\" />";
			print "<link rel=\"stylesheet\" type=\"text/css\" href=\"../Framework/custom.css\" />";

		  /* Import Audio and Video Framework */

			include("media/audio.php");
			include("media/video.php");

		  /* Import AtlasUI Main Modules */

			/* To be included on a further date - include("plugins/aosdt_auth.php"); */
			include("main/module.php");
			include("main/search.php");
			include("main/topbar.php");

		  /* Import AtlasUI Browser Interaction Modules */
			
			/* To be included on a further date - include("browser/notification.php"); */

			include("browser/redirect.php");

		  /* Import Modular Communication Framework */
		  
			include("plugins/atlasui_sql_connect.php");

		  /* Import Social Network Framework */

			include("social/facebook.php");
			include("social/flattr_button.php");
			include("social/google_plus_one.php");
			include("social/google_buzz.php");
			include("social/evovid.php");
			include("social/reddit.php");
			include("social/twitter.php");
			include("social/youtube.php");

		?>
		
	</body>
</html>
