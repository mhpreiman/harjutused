<?php

$opilane = array(
    'eesnimi' => 'Anne',
    'perenimi' => 'Kaasik',
    'vanus' => 12,
    'klass' => 6
);

echo '<pre>';
print_r($opilane);
echo '</pre>';
echo $opilane['eesnimi'];
echo '<hr>';


foreach ($opilane as $voti => $vaartus){
    echo $voti.' - '.$vaartus.'<br>';
}
echo '<hr>';


$opilased = array(
    array(
        'eesnimi' => 'Anne',
        'perenimi' => 'Kaasik',
        'vanus' => 12,
        'klass' => 6
    ),
    array(
        'eesnimi' => 'Toomas',
        'perenimi' => 'Kääbik',
        'vanus' => 17,
        'klass' => 11
    ),
    array(
        'eesnimi' => 'Rita',
        'perenimi' => 'Laht',
        'vanus' => 13,
        'klass' => 7
    )
);

echo '<pre>';
print_r($opilased);
echo '</pre><hr>';


foreach ($opilased as $opilane){
    foreach ($opilane as $voti => $vaartus){
        echo $voti.' - '.$vaartus.'<br>';
    }
    echo '-------<br>';
}


echo '<hr>';


/*
Funktsioon otsiRaamat, parameetriks raamatute massiiv ja nende väljalaenutamise olek.
Tagastab massiivi.
Funktsioon raamatuteTabel, parameetriks massiiv.
Tulemused tabeli kujul, mille pealkirjadeks massiivi võtmed
Katsetamiseks:
array(
    array(
        'title' => 'raamat',
        'author' => 'autor',
        'print' => 'trükikoda',
        'status' => 'seisund'
    )
)*/
$raamatud = array(
    array('title' => 'Söekaevurid',
        'author' => 'E. Zola',
        'print' => 'Eesti Riiklik Kirjastus',
        'status' => 'sees'
    ),
    array('title' => 'Läänerindel muutuseta',
        'author' => 'E. Remarque',
        'print' => 'Tänapäev',
        'status' => 'valjas'
    ),
    array('title' => 'Faust',
        'author' => 'J. W. Goethe',
        'print' => 'Tartu Ülikooli Kirjastus',
        'status' => 'sees'
    ),
    array('title' => 'Isa Goriot',
        'author' => 'H. Balzac',
        'print' => 'Kirjastus Avita',
        'status' => 'valjas'
    ),
    array('title' => 'Kuritöö ja karistus',
        'author' => 'F. Dostojevski',
        'print' => 'Eesti Riiklik Kirjastus',
        'status' => 'valjas')
);


//Raamatu tabel
function raamatuTabel($raamatud) {

    $html = '<table border="1"><thead>';
    $getAttribute = array_keys($raamatud[0]);           //get array keys (eg 'title')


//FIRST ROW
    foreach ($getAttribute as $attribute) {
        $html .= '<th>'.$attribute.'</th>';
    }
    $html .= '</thead>';


//ROWS
    foreach ($raamatud as $raamat) {
        $html .= '<tr>';


//COLUMNS
        foreach ($getAttribute as $attribute) {
            $html .= '<td>'.$raamat[$attribute].'</td>';
        }
        $html .= '</tr>';
    }

    $html .= '</table>';
    echo $html;
}
raamatuTabel($raamatud);


echo '<hr>';



//Otsi raamatuid
function otsiRaamat($raamatud, $staatus) {

    $leitudRaamatud = array();
    foreach($raamatud as $raamat) {
        ($raamat['status'] == $staatus) ? $leitudRaamatud[] = $raamat : null;
    }
    return $leitudRaamatud;
}

$raamatudKohal = otsiRaamat($raamatud, 'sees');
raamatuTabel($raamatudKohal);
