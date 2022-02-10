<?php

require 'classes/game.php';

$mapFill = [
    [0, 0, 0, 0, 'k'],
    [0, 1, 1, 0, 1],
    ['s', 1, 0, 0, 1],
    [1, 1, 1, 0, 1],
    ['e', 0, 0, 0, 1]
];
$map = new Game($mapFill);


$map->showPostion($map->getPlayermap());

$map->showMap($map->getPlayermap());

// $ma_chaine = $map->showPostion($map->getPlayermap());
// $trouve_moi  = ' ' . 's';

// echo strpos($ma_chaine, $trouve_moi);
// $position = strpos($ma_chaine, $trouve_moi);
// if ($position == 's') {

//     echo '', $trouve_moi, ' a été trouvée dans la chaine ', '';
//     echo 'à la position ', $position;
// } else {
//     echo '', $trouve_moi, ' n\'a pas été trouvé dans la chaine ', $ma_chaine, '';
// }



















// while ($position === NULL) {
//     $counter = $counter + 1;
//         echo $i;
//     $i++;
// endwhile;
// }



// if ($position === false) {
//     echo '', $trouve_moi, ' n\'a pas été trouvé dans la chaine ', $ma_chaine, '';
// } else {
//     echo '', $trouve_moi, ' a été trouvée dans la chaine ', '';
//     echo 'à la position ', $position;
// }

// $ma_chaine = $mapscd;

// $trouve_moi  = 's';
// $position = strpos($ma_chaine, $trouve_moi);

// if ($position === false) {
//     echo '', $trouve_moi, ' n\'a pas été trouvé dans la chaine ', $ma_chaine, '';
// } else {
//     echo '', $trouve_moi, ' a été trouvée dans la chaine ', $ma_chaine, '';
//     echo 'à la position ', $position, '';
// }



// echo $map->getInfoMap(4, 0);
// echo $map->getInfoMap(0, 4);
