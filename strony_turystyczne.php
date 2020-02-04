<?php     if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
        ob_start("ob_gzhandler");     else        ob_start(); ?>
<HTML>
 <HEAD>
<link REL="stylesheet" type="text/css" HREF="styl_t.css">

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=ISO-8859-2">

<meta name="keywords" content="katalog stron turystycznych, strony turystyczne, ciekawe strony o turystyce, serwisy turystyczne, serwisy hotelarskie, noclegi, biura podróży, agencje turystyczne, internetowe przewodniki turystyczne, podróże, agrowczasy, intervac, podróżnicy, turystyka, wakacje, wycieczki, trekking, wyprawy,  uzdrowiska, sanatoria ">
<meta name="description" content="katalog stron turystycznych, strony turystyczne, ciekawe strony o turystyce, serwisy turystyczne, serwisy hotelarskie, noclegi, biura podróży, agencje turystyczne, internetowe przewodniki turystyczne, podróże, agrowczasy, intervac, podróżnicy, turystyka, wakacje, wycieczki, trekking, wyprawy, uzdrowiska, sanatoria">

</head>
<title>Strony turystyczne. Turystyka - atrakcje, Katalog stron turystycznych, ciekawe strony, przydatne linki</title>

<body>
<? //// turystyka-atrakcje - katalog stron 

error_reporting(0);

$domenat='http://turystyka-atrakcje.pl/';

$r_kwad='<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- mobogrodnik -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-4066868150324446"
     data-ad-slot="1365370119"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';

$bialy_l='<script type="text/javascript"><!--
google_ad_client = "pub-4066868150324446";
/* 468x15, utworzono 09-07-08 */
google_ad_slot = "3620915897";
google_ad_width = 468;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';  	

$wyszu_agal='
<form action="http://www.google.com/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-4066868150324446:7zjuymaksu1" />
    <input type="hidden" name="ie" value="ISO-8859-2" />
    <input type="text" name="q" size="31" />
    <input type="submit" name="sa" value="Szukaj" />
  </div>
</form>

<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=pl"></script>';

print '<div class="content"><div class="header">
<IMG SRC="naglowek_turystyka.jpg" style="width:100%" align="middle"  BORDER="1" ALT="strony o turystyce">';
include 'menu_drop_down_navigation_bar.html';
print '</div>';
print '<div class="row">
   <div class="column leftside">';

require 'teksty/strony_turystyczne_linki1.php';
print $r_kwad;
print '<br><br>';

require 'teksty/podroznicy_linki.php';
include 'linki_turystyczne/plink_przejazdy.php';
include 'turysto_sprawdz.php';
print '<br>';
print'</div>';

print '<div class="column rightside">';
print '<br>';
print $r_kwad;
require 'linki_turystyczne/plink_tatry.php';
require 'menu_prawe.php';
require 'linki_turystyczne/plink_zamosc.php';
require 'linki_turystyczne/plink_wieden.php';
require 'linki_turystyczne/plink_ceneo.php';
require 'linki_turystyczne/plink_ogrodnik.php';
require 'linki_turystyczne/plink_agaleria.php';
//require 'linki_turystyczne/plink_roztocze.php';

print'</div>
</div>';

print $r_kwad;
print '<br>';
print '<div class="footer"> ';
require 'menu_dolne.php';
print '<br><br>';
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
print '<br>';

print'</div>
</diV>';


?>
</body>
</html>

