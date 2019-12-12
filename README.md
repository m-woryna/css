# turyst
<HTML>
<HEAD>

</HEAD>

<? // porady ogrodnicze - poziom 1  >
error_reporting(0);

$domenat='http://turystyka-atrakcje.pl/';

$beskid_niski_l='<br><a HREF="'.$domenat.'beskid_niski.php"><div class="bok6">BESKID NISKI <br></a></div><br>
<div class="pory">
Nieskażona natura, krajobraz z łagodnie opadającymi pagórkami i kopułami drewnianych cerkwi. <br><br></div>
<a HREF="'.$domenat.'beskid_niski.php">
<IMG SRC="foto_malopol/beskid_niski_krzyz12a.jpg"  BORDER="0" ALT=" Beskid niski, Lackowa, ciekawe miejsca "></a><br><br><div class="pory">
Smerekowiec, Gorlice, Ropa, Jasło, Magura Małastowska.<br>

<a HREF="'.$domenat.'beskid_niski.php">więcej o atrakcjach Beskidu Niskiego...</A><br><br>
</div>
';

print '<TABLE CELLSPACING="0" BORDER="1" BGCOLOR="#FFD48E" BORDERCOLOR="#CC9966"><TR><TD ALIGN="CENTER" VALIGN="MIDDLE" width="170">';
print $beskid_niski_l;
print '</TD></TR></table><br>';
?>

