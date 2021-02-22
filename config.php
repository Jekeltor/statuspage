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
	"Main FiveM Server" => [
		"IP" => "server1.sas-rp.net",
		"port" => "80",
		"status" => "0",
	],
	"play.sas-rp.net" => [
		"IP" => "play.sas-rp.net",
		"port" => "443",
		"status" => "0",
	],
	"Teamspeak" => [
		"IP" => "ts.sas-rp.net",
		"port" => "80",
		"status" => "0",
	],
];

// If empty, the announcement won't appear
$announcement = "";
/* END STATUS PAGE */
