<?php
include("../res/x5engine.php");
$nameList = array("sdv","dup","jse","jtf","dwx","4js","8hr","l53","lex","j4x");
$charList = array("A","3","L","L","S","6","L","E","T","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
