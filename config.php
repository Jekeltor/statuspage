<?php
/////////////////////////////////////////////////////////////////////////
//                                                                     //
//                       Created by Jake Hamblin                       //
//                           jakehamblin.com                           //
//                                                                     //
//  FOR ALL THE VALUES, MAKE SURE TO KEEP THE QUOTATIONS AROUND THEM!  //
//                                                                     //
/////////////////////////////////////////////////////////////////////////

/* GENERAL SITE INFORMATION  */
// Name of your server/community
$name = "San Andreas Shoreline RP";

// Domain of your server/community
$domain = "https://statuspage.test";

// Logo of your server/community
$logo = $domain . "images/logo.png";

// Description of your server/community
$description = "Description";

// Main Color
$colorhex = "#FF0000";
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
		"port" => "443",
		"status" => "3",
	],
	"Test Server 4" => [
		"IP" => "gages.space",
		"port" => "80",
		"status" => "0",
	],
	"Test Server 5" => [
		"IP" => "google.com",
		"port" => "80",
		"status" => "0",
	],
];

// If empty, the announcement won't appear
$announcement = "We believe that a community can save lives. We are a group of people from every walk of life that happen to share a passion for roleplay in a game called GTA. We are San Andreas Shoreline RP.";
/* END STATUS PAGE */
