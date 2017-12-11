<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 11.12.2017
 * Time: 10:00
 */
/*
 * Loo fail nimega vordlused.php
 * Defineeri vähemalt 6 muutujat.
 * Omista nendele väärtused.
 * Kontrolli, mis tüüpi väärtused on ja väljasta info ekraani.
 * Kasutades võrdlusoperaatoreid, kontrolli, kas esimene muutuja rahuldab järgmised tingimused:
 *  *on võrdne teisega;
 *  *on väiksem kui teine;
 *  *on suurem kui teine;
 *  *on väiksem või võrdne kui teine;
 * Väljasta tulemused ekraani.
*/
// muutujate defineerimine
$var1 = 5;
$var2 = 5.0;
$var3 = 2;
$var4 = 2.0;
$var5 = "5";
$var6 = '2';
$var7 = true;
$var8 = false;
// tüübi kontroll gettype(muutuja)
echo '$var1 = '.$var1.' - '.gettype($var1).'<br />';
echo '$var2 = '.$var2.' - '.gettype($var2).'<br />';
echo '$var3 = '.$var3.' - '.gettype($var3).'<br />';
echo '$var4 = '.$var4.' - '.gettype($var4).'<br />';
echo '$var5 = '.$var5.' - '.gettype($var5).'<br />';
echo '$var6 = '.$var6.' - '.gettype($var6).'<br />';
echo '$var7 = '.$var7.' - '.gettype($var7).'<br />';
echo '$var8 = '.$var8.' - '.gettype($var8).'<br />';
// loome abifunktisoon lisateksti väljastamiseks
function vordlus($toevaartus){
    if($toevaartus == true){
        return ' - true';
    } else {
        return ' - false';
    }
}
// väljastame erinevate võrdluste tulemused
echo '<hr />';
echo $var1.' == '.$var2.vordlus($var1 == $var2).'<br/>';
echo $var1.' == '.$var5.vordlus($var1 == $var5).'<br/>';
echo $var1.' === '.$var2.vordlus($var1 === $var2).'<br/>';
echo $var1.' === '.$var5.vordlus($var1 === $var5).'<br/>';
echo $var5.' === '.$var5.vordlus($var5 === $var5).'<br/>';
echo '<hr />';
echo $var1.' != '.$var3.vordlus($var1 != $var3).'<br/>';
echo $var1.' !== '.$var5.vordlus($var1 !== $var5).'<br/>';
echo '<hr />';
echo $var7.' == '.$var8.vordlus($var7 == $var8).'<br/>';
echo $var7.' != '.$var8.vordlus($var7 != $var8).'<br/>';
// vaatame mõned matemaatilised operaatorid
// var++ var-- ++var --var
echo '<hr />';
$a = 2; $b = 5;
$c = $a++;
echo 'a = '.$a.' c = '.$c.'<br />';
$d = $b--;
echo 'b = '.$b.' d = '.$d.'<br />';
$a = 2; $b = 5;
$c = ++$a;
echo 'a = '.$a.' c = '.$c.'<br />';
$d = --$b;
echo 'b = '.$b.' d = '.$d.'<br />';
// loome ka paar konstandit
// define() funktisooniga
define('AINE_NIMETUS', 'PHP Alused');
define('NUMBER', 1);
echo '<hr />';
// trükime ka need välja
echo 'Aine nimetus: '.AINE_NIMETUS.'<br />';
echo 'Konstantne number: '.NUMBER.'<br />';
// katsetame konstandi suurendamist
//NUMBER++; //see ei tööta
//echo 'Suurendatud number = '.NUMBER;