<?php

/*
Defineeri 6 muutujat koos väärtustega ja prindi nende tüüp
Võrdlusoperaatoritega kontrolli, kas esimene muutuja:
    on võrdne teisega;
    on väiksem kui teine;
    on suurem kui teine;
    on väiksem või võrdne kui teine;
Prindi tulemused
*/

$var1 = 2;
$var2 = 2.0;
$var3 = "2";
$var4 = '2';
$var5 = true;
$var6 = false;


echo '<span style="background: lightgray;">$var1 = '.$var1.'</span> &emsp; type is: &emsp;'.gettype($var1).'<br>';
echo '<span style="background: lightgray;">$var2 = '.$var2.'</span> &emsp; type is: &emsp;'.gettype($var2).'<br>';
echo '<span style="background: lightgray;">$var3 = '.$var3.'</span> &emsp; type is: &emsp;'.gettype($var3).'<br>';
echo '<span style="background: lightgray;">$var4 = '.$var4.'</span> &emsp; type is: &emsp;'.gettype($var4).'<br>';
echo '<span style="background: lightgray;">$var5 = '.json_encode($var5).'</span> &emsp; type is: &emsp;'.gettype($var5).'<br>';
echo '<span style="background: lightgray;">$var6 = '.json_encode($var6).'</span> &emsp; type is: &emsp;'.gettype($var6).'<br>';

echo "<hr>";

function vordlus($toevaartus){
    if($toevaartus == true){
        return ' true';
    } else {
        return ' false';
    }
}

echo '<span style="background: lightgray;">'.$var1.' == '.$var2.'</span> &emsp; truth value is: &emsp;'.vordlus($var1 == $var2).'<br>';
echo '<span style="background: lightgray;">'.$var1.' == '.$var5.'</span> &emsp; truth value is: &emsp;'.vordlus($var1 == $var5).'<br>';
echo '<span style="background: lightgray;">'.$var1.' === '.$var2.'</span> &emsp; truth value is: &emsp;'.vordlus($var1 === $var2).'<br>';
echo '<span style="background: lightgray;">'.$var1.' === '.$var5.'</span> &emsp; truth value is: &emsp;'.vordlus($var1 === $var5).'<br>';
echo '<span style="background: lightgray;">'.$var1.' === '.$var5.'</span> &emsp; truth value is: &emsp;'.vordlus($var5 === $var5).'<br>';
echo '<span style="background: lightgray;">'.$var1.' != '.$var3.'</span> &emsp; truth value is: &emsp;'.vordlus($var1 != $var3).'<br>';
echo '<span style="background: lightgray;">'.$var1.' !== '.$var5.'</span> &emsp; truth value is: &emsp;'.vordlus($var1 !== $var5).'<br>';

echo "<hr>";


//Incrementing/decrementing operators      var++   var--   ++var   --var
$a = 2;
$b = 5;
$c = $a++;
echo 'Variable initial values: a='.$a.' and c='.$c.'<br>';

$d = $b--;
echo 'b='.$b.' and d='.$d.'<br>';

$a = 2;
$b = 5;
$c = ++$a;
echo 'a='.$a.' and c='.$d.'<br>';

$d = --$b;
echo 'b='.$b.' and d='.$d.'<br>';

echo '<hr>';


//Defining CONSTANTS
define('AINE_NIMETUS', 'PHP Alused');
define('NUMBER', 1);

echo 'Aine nimetus: '.AINE_NIMETUS.'<br>';
echo 'Konstantne number: '.NUMBER.'<br>';

?>