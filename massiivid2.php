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

