# valheim-status-picture
A small (incomplete) PHP script to query your Valheim server.

# How is this used?
############################################################################
/*
Edit Option (Line 8)

pic or html or get Request (status.php?option=pic).

Edit Steampath (Line 9):

...\addr\ your IP : your QueryPort &key= Your SteamAPI Key
  
*/
############################################################################
# Example:
$option = "pic";
  
$steam_path = 'https://api.steampowered.com/IGameServersService/GetServerList/v1/?filter=\appid\892970\addr\123.456.789.123:2457&key=ABCDEFGHIJKLMNOPQRSTUVWXYZ01';
  
Simply load it into the web directory of your web server with PHP 5.X or higher and call it up.
