# turyst
<?php

ob_start("ob_gzhandler");

?>

<HTML>
 <HEAD>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=ISO-8859-2">

<meta name="description" content="katalog stron turystycznych, strony turystyczne, ciekawe strony o turystyce, serwisy turystyczne, serwisy hotelarskie, noclegi, biura podróży, agencje turystyczne, internetowe przewodniki turystyczne, podróże, agrowczasy, intervac, podróżnicy, turystyka, wakacje, wycieczki, trekking, wyprawy,  uzdrowiska, sanatoria, agaleria, ciekawe linki, ciekawe strony, przydatne strony, katalog stron internetowych, serwisy informacyjne, serwisy rekruracyjne, strony z ofertami pracy, sklepy internetowe, serwisy finansowe, serwisy poświęcone zdrowiu ">
<meta name="keywords" content="katalog stron turystycznych, strony turystyczne, ciekawe strony o turystyce, serwisy turystyczne, serwisy hotelarskie, noclegi, biura podróży, agencje turystyczne, internetowe przewodniki turystyczne, podróże, agrowczasy, intervac, podróżnicy, turystyka, wakacje, wycieczki, trekking, wyprawy, uzdrowiska, sanatoria, agaleria, ciekawe linki, ciekawe strony, przydatne strony, katalog stron internetowych, serwisy informacyjne, serwisy rekruracyjne, strony turystyczne, strony z ofertami pracy, sklepy internetowe, serwisy finansowe, serwisy poświęcone zdrowiu">

<title>Strony turystyczne. Turystyka - atrakcje, Katalog stron turystycznych, ciekawe strony, przydatne linki</title>

<link REL="stylesheet" type="text/css" HREF="styl1.css">
</HEAD>
<BODY LEFTMARGIN="0" RIGHTMARGIN="0" TOPMARGIN="0" MARGINWIDTH="0" MARGINHEIGHT="0" onLoad="rotujBaner()">
<? // turystyka-atrakcje - katalog stron internetowych>

error_reporting(0);

$domenat='http://turystyka-atrakcje.pl/';
include('sprmob/user_agent_stronyturystyczne.php');


$r_kwad='<script type="text/javascript"><!--
google_ad_client = "ca-pub-4066868150324446";
/* turyst */
google_ad_slot = "7802552674";
google_ad_width = 336;
google_ad_height = 280;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

print'<TABLE ALIGN="CENTER" VALIGN="TOP" WIDTH="1000" CELLSPACING="0" CELLPADDING="0" BORDER="0">';
print'<tr><TD ALIGN="CENTER" VALIGN="BOTTOM" HEIGHT="206" COLSPAN="3" STYLE="background-image: url(naglowek_turystyka.jpg); background-position:left; background-repeat:no-repeat;">';

//require 'naglowek.php';

print"</TD></tr><tr><TD VALIGN='TOP' WIDTH='200'>";
require 'panel_lewy.php';
print '<br>';
require 'linki_turystyczne/link_tatry.php';
require 'linki_turystyczne/link_litwa.php';
require 'linki_turystyczne/link_zamosc.php';
require 'linki_turystyczne/link_wieden.php';
require 'linki_turystyczne/link_roztocze.php';
print '</TD>';
print '<TD VALIGN="TOP" WIDTH="570" >';
require 'turystyka.php';
require 'teksty/strony_turystyczne_linki.php';

print $r_kwad;
print '<br><br>';
require 'teksty/podroznicy_linki.php';
print '<br><br>';
print $r_kwad;
print '<br><br>';
require 'turysto_sprawdz.php';
print '<br>';	
require 'turystyka.php';
print '<br><br>';

print '</TD><TD ALIGN="CENTER" VALIGN="TOP" WIDTH="200">';
print '<br>';
require 'ads_bokp_tur.php';
	 print '<br><br>';

require 'linki_turystyczne/link_polskie_morze.php';
require 'linki_turystyczne/link_krakow.php';
require 'linki_turystyczne/link_beskid_niski.php';
require 'linki_turystyczne/link_sandomierz.php';
require 'linki_turystyczne/link_bieszczady.php';
print "</TD></tr>";

print "</TD></tr>";
print'<tr><TD ALIGN="CENTER" VALIGN="MIDDLE" HEIGHT="2" COLSPAN="3" BACKGROUND="boczek.jpg">';
print "</TD></tr>";
print'<tr><TD ALIGN="CENTER" VALIGN="TOP" COLSPAN="3">';
print 'http://turystyka-atrakcje.pl/ &nbsp &nbsp &nbsp';

if(!(file_exists("liczba_str.txt"))) { //nie ma pliku z licznikiem 
     $plik_l=fopen("liczba_str.txt","w+");
	 fputs($plik_l,"0");
	 fclose ($plik_l);
	 }
  $plik_l=fopen("liczba_str.txt","r+");	 
  if(!($plik_l)) {
     print("BŁĄD: nie da się otworzyć pliku!"); }
	 else  {
	 flock($plik_l, 2);
	 $ile=fgets($plik_l, 255);
	 $ile++;
	 print "Licznik odwiedzin: ". $ile."<br>";
	 fseek($plik_l,0);
	 fputs($plik_l, "$ile");
	 fclose ($plik_l);
	 }
print '<br><br>';
print "</TD></tr>";
print "</TABLE>";
?>
</BODY>
</HTML>	
