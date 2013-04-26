<?php
session_start();
header('Cache-control: private');
// IE 6 FIX
if(isSet($_GET['lang'])) {
$lang=$_GET['lang'];
// register the session and set the cookie
$_SESSION['lang']=$lang;
setcookie("lang",$lang,time()+(3600*24*30));
} else if(isSet($_SESSION['lang'])) {
$lang=$_SESSION['lang'];
} else if(isSet($_COOKIE['lang'])) {
$lang=$_COOKIE['lang'];
} else {
$lang='en';
}
switch ($lang) {
case 'en':
$lang_file='lang.en.php';
break;
case 'es':
$lang_file='lang.es.php';
break;
case 'fr':
$lang_file='lang.fr.php';
break;
case 'gr':
$lang_file='lang.gr.php';
break;
case 'it':
$lang_file='lang.it.php';
break;
case 'pl':
$lang_file='lang.pl.php';
break;
case 'tr':
$lang_file='lang.tr.php';
break;
case 'bg':
$lang_file='lang.bg.php';
break;
case 'hu':
$lang_file='lang.hu.php';
break;
case 'lv':
$lang_file='lang.lv.php';
break;
case 'pt':
$lang_file='lang.pt.php';
break;
case 'hr':
$lang_file='lang.hr.php';
break;
case 'lt':
$lang_file='lang.lt.php';
break;
case 'ru':
$lang_file='lang.ru.php';
break;
case 'sk':
$lang_file='lang.sk.php';
break;
case 'ro':
$lang_file='lang.ro.php';
break;
case 'nl':
$lang_file='lang.nl.php';
break;
case 'cz':
$lang_file='lang.cz.php';
break;
default:
$lang_file='lang.en.php';
}
include_once 'languages/'.$lang_file;
?>