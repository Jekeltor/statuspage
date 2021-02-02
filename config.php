<?php
	/////////////////////////////////////////////////////////////////////////
	//                                                                     //
	//                       Created by Jake Hamblin                       //
        //                           jakehamblin.com                           //
	//                                                                     //
	//                                                                     //
	//                         Edits Made By Hyperz                        //
	//                          https://hyperz.dev                         //
	//                                                                     //
	//                                                                     //
	//  FOR ALL THE VALUES, MAKE SURE TO KEEP THE QUOTATIONS AROUND THEM!  //
	//                                                                     //
	/////////////////////////////////////////////////////////////////////////

	/* GENERAL SITE INFORMATION  */
	// Name of your server/community
	$name = "Community Name";

	// Domain URL
	$domain = "https://hyperz.dev/status";

	// Logo of your server/community
	$logo = "https://jakehamblin.com/images/logo.png";

	// Description of your server/community
	$description = "Description";

	// Background Image URL
	$backgroundimageurl = "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.wallpaperscraft.com%2Fimage%2Fmountains_starry_sky_night_132015_1920x1080.jpg&f=1&nofb=1";

	// Home Page Domain
	$homepagedomain = "https://hyperz.dev/";
		
	// Main Color
	$colorhex = "#0f7cff";
	/* END GENERAL SITE INFORMATION */

	/* START STATUS PAGE */
	// 0 = automatic, 1 = operational, 2 = issues, 3 = offline
	$servers = [
		"Test Server 1" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "1",
		],
		"Test Server 2" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "2",
		],
		"Test Server 3" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "3",
		],
		"Test Server 4" => [
			"IP" => "jakehamblin.com",
			"port" => "30120",
			"status" => "0",
		],
	];

	// If empty, the announcement won't appear
	$announcement = "Servers one and two are having some issues";
	/* END STATUS PAGE */


	/* RANDOM PHP FUNCTIONS AND JOBS */
	// Convert HEX provided to RGB
	list($r, $g, $b) = sscanf($colorhex, "#%02x%02x%02x");
	$colorrgb = $r.", ".$g.", ".$b;

	// Make color darked
	$darkerpercent = ".5";
	$colordarker = $r*$darkerpercent.", ".$g*$darkerpercent.", ".$b*$darkerpercent;
?>
