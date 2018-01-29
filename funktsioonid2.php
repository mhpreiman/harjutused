<?php
/*
Koosta funktsioon arvuSumma, mis võtab parameetrina suvalise numbri,
mille individuaalsed osad summeerib omavahel ning tagastab need
nt arvuSumma(123) -> 1+2+3 = 6
*/


function arvuSumma($number){

    //Stop if input is 0 or not an integer
    if (gettype($number) !== "integer" || $number == 0) {
        echo 'Sisend peab olema täisnumber, va 0';
        return null;
    }

    $numbrid = str_split($number);
    $arvutus = null;
    $summa = null;

    for($i = 0; $i <= count($numbrid)-1; $i++) {

        $arvutus.= $numbrid[$i];

        //if not last element, add +
        ($i !== count($numbrid)-1) ? $arvutus.=' + ' : null;

        $summa += $numbrid[$i];
    }
    return $number.' => '.$arvutus.' = '.$summa;
}
echo arvuSumma(5632);


echo '<br><br>';


//v. 2
function arvuSumma2($number){
    $summa = 0;
    while($number != 0){
        $arv = $number % 10;
        $summa += $arv;
        $number /= 10;
        settype($number, 'integer');
    }
    return $summa;
}
$number = 743;

echo 'Numbri '.$number.' arvude summa on '.arvuSumma2($number).'<br><br>';



for ($i = 1; $i <= 3; $i++){
    $number = rand(0, 1000);
    echo 'Numbri '.$number.' arvude summa on '.arvuSumma2($number).'<br>';
}

echo '<br>';



/*
Koosta funktsioon otsiNumber, mille parameetriteks
juhuslik arv ja staatiline arv.
Leia mitu korda staatiline arv esineb suvalises numbris ning prindi see
(nt arv 5 numbris 41515 2-korda)

Stringi-lahendused keelatud
*/


function otsiNumber($juhuArv, $staatilineArv){
    echo $staatilineArv.' esineb arvus '.$juhuArv;
    $esinemisKorrad = 0;

    while($juhuArv != 0){
        $arv = $juhuArv % 10;
//echo '<br>'.$arv;
        if($arv == $staatilineArv)
            $esinemisKorrad++;
        $juhuArv /= 10;
        settype($juhuArv, 'integer');

    }
    echo ' '.$esinemisKorrad.' arv korda<br>';
}
otsiNumber(1684214574, 1);             //CAN'T BE LONGER BECAUSE OF OVERFLOW
otsiNumber(1684214574, 5);
otsiNumber(1684214574, 4);