<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <meta name="robots" content="none" />
</head>
<body>
<?php
/*********************************************
* plik podglad.php
*********************************************/

// wczytanie zawartości pliku do tablicy
$file = file("waluty.txt");
// przechodzimy przez tablicę za pomocą pętli foreach
foreach($file as $value) {
// rozbijamy poszczególne linie na części
$exp = explode("`",$value);
}
?>
<table width="970" border="0" align="center">
<tr>
<td>

<table width="600" border="1" align="left" valign="top">
<tr>
<td width="50"><img src="icons/flags/us.svg"></td>
<td width="125">USA</td>
<td width="100">Ilosc: <?php { echo $exp[0]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[1]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[2]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/eu.svg"></td>
<td width="125">Europa</td>
<td width="100">Ilosc: <?php { echo $exp[3]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[4]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[5]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/gb.svg"></td>
<td width="125">Wielka Brytania</td>
<td width="100">Ilosc: <?php { echo $exp[6]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[7]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[8]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ch.svg"></td>
<td width="125">Szwajcaria</td>
<td width="100">Ilosc: <?php { echo $exp[9]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[10]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[11]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/al.svg"></td>
<td width="125">Albania</td>
<td width="100">Ilosc: <?php { echo $exp[12]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[13]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[14]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/sa.svg"></td>
<td width="125">Arabia Saudyjska</td>
<td width="100">Ilosc: <?php { echo $exp[15]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[16]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[17]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/au.svg"></td>
<td width="125">Australia</td>
<td width="100">Ilosc: <?php { echo $exp[18]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[19]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[20]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/by.svg"></td>
<td width="125">Białoruś</td>
<td width="100">Ilosc: <?php { echo $exp[21]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[22]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[23]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ba.svg"></td>
<td width="125">Bośnia</td>
<td width="100">Ilosc: <?php { echo $exp[24]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[25]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[26]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/br.svg"></td>
<td width="125">Brazylia</td>
<td width="100">Ilosc: <?php { echo $exp[27]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[28]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[29]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/bg.svg"></td>
<td width="125">Bułgaria</td>
<td width="100">Ilosc: <?php { echo $exp[30]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[31]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[32]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/cl.svg"></td>
<td width="125">Chile</td>
<td width="100">Ilosc: <?php { echo $exp[33]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[34]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[35]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/cn.svg"></td>
<td width="125">Chiny</td>
<td width="100">Ilosc: <?php { echo $exp[36]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[37]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[38]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/hr.svg"></td>
<td width="125">Chorwacja</td>
<td width="100">Ilosc: <?php { echo $exp[39]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[40]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[41]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/cz.svg"></td>
<td width="125">Czechy</td>
<td width="100">Ilosc: <?php { echo $exp[42]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[43]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[44]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/dk.svg"></td>
<td width="125">Dania</td>
<td width="100">Ilosc: <?php { echo $exp[45]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[46]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[47]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/eg.svg"></td>
<td width="125">Egipt</td>
<td width="100">Ilosc: <?php { echo $exp[48]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[49]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[50]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ph.svg"></td>
<td width="125">Filipiny</td>
<td width="100">Ilosc: <?php { echo $exp[51]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[52]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[53]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ge.svg"></td>
<td width="125">Gruzja</td>
<td width="100">Ilosc: <?php { echo $exp[54]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[55]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[56]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/hk.svg"></td>
<td width="125">Hong Kong</td>
<td width="100">Ilosc: <?php { echo $exp[57]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[58]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[59]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/id.svg"></td>
<td width="125">Indonezja</td>
<td width="100">Ilosc: <?php { echo $exp[60]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[61]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[62]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/is.svg"></td>
<td width="125">Islandia</td>
<td width="100">Ilosc: <?php { echo $exp[63]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[64]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[65]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/il.svg"></td>
<td width="125">Izrael</td>
<td width="100">Ilosc: <?php { echo $exp[66]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[67]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[68]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/jp.svg"></td>
<td width="125">Japonia</td>
<td width="100">Ilosc: <?php { echo $exp[69]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[70]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[71]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/jo.svg"></td>
<td width="125">Jordania</td>
<td width="100">Ilosc: <?php { echo $exp[72]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[73]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[74]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ca.svg"></td>
<td width="125">Kanada</td>
<td width="100">Ilosc: <?php { echo $exp[75]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[76]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[77]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/qa.svg"></td>
<td width="125">Katar</td>
<td width="100">Ilosc: <?php { echo $exp[78]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[79]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[80]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/kz.svg"></td>
<td width="125">Kazahstan</td>
<td width="100">Ilosc: <?php { echo $exp[81]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[82]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[83]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ke.svg"></td>
<td width="125">Kenia</td>
<td width="100">Ilosc: <?php { echo $exp[84]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[85]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[86]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/kr.svg"></td>
<td width="125">Korea Południowa</td>
<td width="100">Ilosc: <?php { echo $exp[87]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[88]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[89]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/kw.svg"></td>
<td width="125">Kuwejt</td>
<td width="100">Ilosc: <?php { echo $exp[90]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[91]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[92]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/mk.svg"></td>
<td width="125">Macedonia</td>
<td width="100">Ilosc: <?php { echo $exp[93]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[94]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[95]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/my.svg"></td>
<td width="125">Malezja</td>
<td width="100">Ilosc: <?php { echo $exp[96]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[97]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[98]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/mo.svg"></td>
<td width="125">Maroko</td>
<td width="100">Ilosc: <?php { echo $exp[99]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[100]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[101]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/mx.svg"></td>
<td width="125">Meksyk</td>
<td width="100">Ilosc: <?php { echo $exp[102]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[103]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[104]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/md.svg"></td>
<td width="125">Mołdawia</td>
<td width="100">Ilosc: <?php { echo $exp[105]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[106]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[107]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/no.svg"></td>
<td width="125">Norwegia</td>
<td width="100">Ilosc: <?php { echo $exp[108]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[109]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[110]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/nz.svg"></td>
<td width="125">Nowa Zelandia</td>
<td width="100">Ilosc: <?php { echo $exp[111]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[112]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[113]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/om.svg"></td>
<td width="125">Oman</td>
<td width="100">Ilosc: <?php { echo $exp[114]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[115]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[116]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/pe.svg"></td>
<td width="125">Peru</td>
<td width="100">Ilosc: <?php { echo $exp[117]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[118]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[119]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/do.svg"></td>
<td width="125">Republika Dominikańska</td>
<td width="100">Ilosc: <?php { echo $exp[120]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[121]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[122]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/cv.svg"></td>
<td width="125">Republika Zielonego Przylądka</td>
<td width="100">Ilosc: <?php { echo $exp[123]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[124]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[125]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ru.svg"></td>
<td width="125">Rosja</td>
<td width="100">Ilosc: <?php { echo $exp[126]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[127]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[128]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/za.svg"></td>
<td width="125">RPA</td>
<td width="100">Ilosc: <?php { echo $exp[129]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[130]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[131]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ro.svg"></td>
<td width="125">Rumunia</td>
<td width="100">Ilosc: <?php { echo $exp[132]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[133]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[134]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/sg.svg"></td>
<td width="125">Singapur</td>
<td width="100">Ilosc: <?php { echo $exp[135]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[136]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[137]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/rs.svg"></td>
<td width="125">Serbia</td>
<td width="100">Ilosc: <?php { echo $exp[138]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[139]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[140]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/se.svg"></td>
<td width="125">Szwecja</td>
<td width="100">Ilosc: <?php { echo $exp[141]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[142]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[143]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/th.svg"></td>
<td width="125">Tajlandia</td>
<td width="100">Ilosc: <?php { echo $exp[144]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[145]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[146]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/tw.svg"></td>
<td width="125">Tajwan</td>
<td width="100">Ilosc: <?php { echo $exp[147]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[148]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[149]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/tn.svg"></td>
<td width="125">Tunezja</td>
<td width="100">Ilosc: <?php { echo $exp[150]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[151]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[152]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/tr.svg"></td>
<td width="125">Turcja</td>
<td width="100">Ilosc: <?php { echo $exp[153]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[154]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[155]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ua.svg"></td>
<td width="125">Ukraina</td>
<td width="100">Ilosc: <?php { echo $exp[156]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[157]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[158]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/hu.svg"></td>
<td width="125">Węgry</td>
<td width="100">Ilosc: <?php { echo $exp[159]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[160]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[161]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/vn.svg"></td>
<td width="125">Wietnam</td>
<td width="100">Ilosc: <?php { echo $exp[162]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[163]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[164]; } ?></td>
</tr>
<tr>
<td width="50"><img src="icons/flags/ae.svg"></td>
<td width="125">Zjednoczone Emiraty Arabskie</td>
<td width="100">Ilosc: <?php { echo $exp[165]; } ?></td>
<td width="150">Kupno: <?php { echo $exp[166]; } ?></td>
<td width="175">Sprzedaz: <?php { echo $exp[167]; } ?></td>
</tr>
</table>

<table width="370" border="1" align="right" valign="top">
<tr>
<td>Tekst w headerze</td>
</tr>
<tr>
<td><?php { echo $exp[168]; } ?></td>
</tr>
<tr>
<td>Tekst na dole strony</td>
</tr>
<tr>
<td><?php { echo $exp[169]; } ?></td>
</tr>
<tr>
<td>[ENG] Tekst w headerze</td>
</tr>
<tr>
<td><?php { echo $exp[170]; } ?></td>
</tr>
<tr>
<td>[ENG] Tekst na dole strony</td>
</tr>
<tr>
<td><?php { echo $exp[171]; } ?></td>
</tr>
</table>

</td>
</tr>
</table>
<br><br><a href="kasyno2022.php"><< powrót</a>

</body>
</html>