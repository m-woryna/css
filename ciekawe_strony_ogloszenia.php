<?php     if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
        ob_start("ob_gzhandler");     else        ob_start(); ?>
<HTML>
 <HEAD>
 
<style>
* {
    box-sizing: border-box;
}


body { padding-top: 10px;
    padding-bottom: 10px;
    background-color: white;
     }
 .content {
  max-width: 1260px;
  margin: auto;
   line-height: 1.4;
  font-size: medium;
  font-family: Arial, Helvetica, sans-serif;
  
}
.content a {
    font-weight: bold;
    text-decoration: underline;
 }

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 3px 3px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin: 4px 2px;
    cursor: pointer;
}
.button2 {background-color: #008CBA;} /* Blue */
.button4 {background-color: #e7e7e7; color: black;} /* Gray */
H1 {font-family:sans-serif; font-weight:bold; font-size:20px; color:#1b2a5b;}
H2 {font-family:sans-serif; font-weight:bold; font-size:16px; color:#1b2a5b;}

div.gallery5 {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 300px;
    height: 320px;
}

div.gallery5:hover {
    border: 1px solid #777;
}

div.gallery5 img {
    width: auto;
    height: auto;
}

div.desc5 {
    padding: 15px;
    text-align: center;
    font-size:15px; 
}    

</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34753635-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
 
</script>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=ISO-8859-2">

<script src="http://politykacookies.pl/politykacookies.pl.js"></script> <script type="text/javascript"> cookiesPolicy(); </script>

<meta name="keywords" content="og³oszenia, serwisy og³oszeniowe, baza og³oszeñ, ciekawe linki, ciekawe strony, przydatne strony, katalog stron internetowych, serwisy informacyjne, portale informacyjne, aktualne wiadomo¶ci, najwa¿niejsze informacje z kraju i ¶wiata, publicystyka, wiadomo¶ci, polityka, serwisy radiowe,  serwisy regionalne, portale plotkarskie, agaleria, tworzenie stron internetowych , programy do obróbki fotografii cyfrowej, internetowa galeria zdjêæ,  serwisy rekruracyjne, strony turystyczne, strony z ofertami pracy, sklepy internetowe, serwisy finansowe, serwisy po¶wiêcone zdrowiu, uzdrowiska ">
<meta name="description" content="og³oszenia, serwisy og³oszeniowe, baza og³oszeñ, ciekawe linki, ciekawe strony, przydatne strony, katalog stron internetowych, serwisy informacyjne, portale informacyjne, aktualne wiadomo¶ci, najwa¿niejsze informacje z kraju i ¶wiata, publicystyka, wiadomo¶ci, polityka, serwisy radiowe,  serwisy regionalne, portale plotkarskie, agaleria, tworzenie stron internetowych , programy do obróbki fotografii cyfrowej, internetowa galeria zdjêæ,  serwisy rekruracyjne, strony turystyczne, strony z ofertami pracy, sklepy internetowe, serwisy finansowe, serwisy po¶wiêcone zdrowiu, uzdrowiska">

</head>

<title>Serwisy og³oszeniowe, katalog stron Agaleria - Ciekawe strony, przydatne linki.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<? // serwisy og³oszeniowe, og³oszenia, agaleria - katalog stron internetowych>

error_reporting(0);

$domena='http://agaleria.pl/';

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

$wyszu_agal='
<form action="http://www.google.com/cse" id="cse-search-box">
  <div>
    <input type="hidden" name="cx" value="partner-pub-4066868150324446:7zjuymaksu1" />
    <input type="hidden" name="ie" value="ISO-8859-2" />
    <input type="text" name="q" size="28" />
    <input type="submit" name="sa" value="Szukaj" />
  </div>
</form>

<script type="text/javascript" src="http://www.google.com/coop/cse/brand?form=cse-search-box&amp;lang=pl"></script>';

print '<div class="content"><div class="w3-container">
<IMG SRC="agaleria_ogloszenia.jpg" style="width:100%" align="middle"  BORDER="1" ALT="agaleria">';

print '<div class="w3-panel w3-card-4 w3-light-blue  w3-center"><p>';
print '<b>AGALERIA - CIEKAWE LINKI, PRZYDATNE STRONY - KATALOG STRON - SERWISY OG£OSZENIOWE : </b></p>';
print $wyszu_agal;
print '</div></div>';

print '<div class="w3-container">';

print '<div class="w3-col m2 w3-left">';
 print '<div class="w3-panel w3-card-4 w3-light-blue " ><p>';
require 'menugorne.php';
print ' </p>';
 print $r_kwad;
print '</div></div>';
  
print '<div class="w3-col m7 w3-left"> ';
  print '<div class="w3-panel w3-card-4 w3-white " >';
  require 'baner_top.php'; 
  require 'ogloszenia_linki.php';
  print '<br>';
  require 'ads_300_250.php';
  print '<br><br>';
  print  '<br><b>ZOBACZ TAK¯E :</B><br><br>';
  require 'plink_serwisy_info.php';
  require 'plink_zdrowie.php';
   require 'baner_down.php';
   require 'plink_praca.php';
 require 'plink_nauka.php';  
 require 'ads_baner_srodkowy.php';
  require 'plink_mysl.php';
  
  print '<div class="row">
    <div class="gallery5">';
     require 'ads_baner_srodkowy_ind.php';
  print '</div></div><br><br>';
    
  print '<br></div>';
  print '</div>';

print '<div class="w3-col m3 w3-center">';
  print '<div class="w3-panel w3-card-4 w3-white " >';
    require 'kalendarzyk.php';
  print '<br></div>';
print '<div class="w3-panel w3-card-4 w3-light-grey " ><p> ';
   require 'menuprawe.php';
   print '<br></p>';
    print $r_kwad;
  //require 'link_slask_strony.php';
  require 'link_dolny_slask_strony.php';
  require 'link_mazowieckie_strony.php';
  require 'link_podkarpackie_strony.php';
  require 'plink_na_wesolo2.php';  
print '<br></div></div>';
print '</div>';
print '<div class="w3-container">';
require 'plink_ogrodnik.php';
print '  </div>';
print '<div class="w3-container">';
require 'plink_turystyka_atrakcje.php';
print '  </div>';


  if(!(file_exists("liczba_oglosz.txt"))) { //nie ma pliku z licznikiem 
     $plik_l=fopen("liczba_oglosz.txt","w+");
	 fputs($plik_l,"0");
	 fclose ($plik_l);
	 }
  $plik_l=fopen("liczba_oglosz.txt","r+");	 
  if(!($plik_l)) {
     print("B£¡D: nie da siê otworzyæ pliku!"); }
	 else  {
	 flock($plik_l, 2);
	 $ile=fgets($plik_l, 255);
	 $ile++;
	
	 fseek($plik_l,0);
	 fputs($plik_l, "$ile");
	 fclose ($plik_l);
	 }
include 'stopka.php';
print '<br>';

?>
</body>
</html>

