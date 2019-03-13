<?php
//This is a Line added to see if it updates!!

$glo_ver = file_get_contents('https://raw.githubusercontent.com/VoldemortCommunity/SpotifyChecker/master/.version');
$loc_ver = file_get_contents('.version');
if($glo_ver > $loc_ver){
	echo "\033[01;32;1m[i] Update Available!!\n";
	$changes = file_get_contents("https://raw.githubusercontent.com/VoldemortCommunity/SpotifyChecker/master/.changelog");
	echo "[i] Changelog : \n".$changes;
	sleep(5);
	echo "\n\033[51;33;1m[i] Do you Want to Update to v".$glo_ver."?? Type \033[01;32;1m'yes'\033[51;33;1m to Continue :\033[0m ";
	$updatehandle = fopen("php://stdin", "rb");
	$ln = fgets($updatehandle);
	if (trim($ln) == 'yes'){
		echo "\033[05;32;1m[i] Updating Now...\n[i] Press Enter to Continue...\033[0m";
		fgetc(STDIN);
		//system('git pull origin master');
		echo "[i] Update Complete!! Please Restart to see Changes!!";
	}
} else {
	echo "You're Already on the Latest Version!";
}
