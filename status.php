<?php
############################################################################
/*
Edit Steampath:
...\addr\<your IP>:<your QueryPort>&key=<Your SteamAPI Key>
*/

$option = "pic"; // pic or html or get Request (status.php?option=pic).
$steam_path = 'https://api.steampowered.com/IGameServersService/GetServerList/v1/?filter=\appid\892970\addr\54.39.215.216:2457&key=0B3D1CFC374D7078C28F55F194B0F293';
############################################################################



$data = json_decode(file_get_contents($steam_path));

$main = $data->response->servers[0];
$name = $main->name;
$address = $main->addr;
$version = $main->version;
$players = $main->players;
$map = $main->map;

//print_r($main);
if($option == "get"):
	if($_GET['option'] == "pic"):
		header("Content-type: image/png");
		$string_server = "Server: ".$name;
		$string_adress = "Address: ".$address;
		$string_player = "Players: ".$players."/10";
		$string_map = "Map: ".$map;
		$string_head = "Server Status";
		$string_footer = date("d.m.Y - H:i:s");

		$im     = imagecreatefrompng("logo.png");
		$orange = imagecolorallocate($im, 220, 210, 60);
		$firebrick1 = imagecolorallocate($im, 255,48,48);
		$DodgerBlue3 = imagecolorallocate($im, 24,116,205);
		$ivory = imagecolorallocate($im, 255,255,240);

		$px     = (imagesx($im) - 6.5 * strlen($string)) / 5;

		imagestring($im, 15, $px, 5, $string_head, $DodgerBlue3);
		imagestring($im, 15, $px, 110, $string_server, $orange);
		imagestring($im, 15, $px, 110, $string_server, $orange);
		imagestring($im, 15, $px, 130, $string_adress, $orange);
		imagestring($im, 15, $px, 150, $string_player, $firebrick1);
		imagestring($im, 15, $px, 170, $string_map, $orange);
		imagestring($im, 15, $px, 310, $string_footer, $ivory);

		imagepng($im);
		imagedestroy($im);
	elseif($_GET['option'] == "html"):
		echo "<h1>Server Status</h1>";
		echo "Server: ".$name;
		echo "<br>";
		echo "Address: ".$address;
		echo "<br>";
		echo "Players: ".$players."/10";
		echo "<br>";
		echo "Map: ".$map;
		echo "<br>";
		echo "Version: ".$version;
		echo "<br>";
		echo "Date: ".date("d.m.Y - H:i:s");
	endif;
else:
	if($option == "pic"):
		header("Content-type: image/png");
		$string_server = "Server: ".$name;
		$string_adress = "Address: ".$address;
		$string_player = "Players: ".$players."/10";
		$string_map = "Map: ".$map;
		$string_head = "Server Status";
		$string_footer = date("d.m.Y - H:i:s");

		$im     = imagecreatefrompng("logo.png");
		$orange = imagecolorallocate($im, 220, 210, 60);
		$firebrick1 = imagecolorallocate($im, 255,48,48);
		$DodgerBlue3 = imagecolorallocate($im, 24,116,205);
		$ivory = imagecolorallocate($im, 255,255,240);

		$px     = (imagesx($im) - 6.5 * strlen($string)) / 5;

		imagestring($im, 15, $px, 5, $string_head, $DodgerBlue3);
		imagestring($im, 15, $px, 110, $string_server, $orange);
		imagestring($im, 15, $px, 110, $string_server, $orange);
		imagestring($im, 15, $px, 130, $string_adress, $orange);
		imagestring($im, 15, $px, 150, $string_player, $firebrick1);
		imagestring($im, 15, $px, 170, $string_map, $orange);
		imagestring($im, 15, $px, 310, $string_footer, $ivory);

		imagepng($im);
		imagedestroy($im);
	endif;
	if($option == "html"):
		echo "<h1>Server Status</h1>";
		echo "Server: ".$name;
		echo "<br>";
		echo "Address: ".$address;
		echo "<br>";
		echo "Players: ".$players."/10";
		echo "<br>";
		echo "Map: ".$map;
		echo "<br>";
		echo "Version: ".$version;
		echo "<br>";
		echo "Date: ".date("d.m.Y - H:i:s");
	endif;
endif;
?>
