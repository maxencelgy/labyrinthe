<?php

class Game
{
    public $map = [];
    public $playermap = [];
    protected $player = 'p';
    protected $key = 'k';
    protected $start = 's';
    protected $end = 'e';

    function __construct($mapFill)
    {
        // $this->map = $mapFill;
        $this->playermap = $mapFill;
    }

    public function getMap()
    {
        return $this->map;
    }

    public function setMap($newMap)
    {
        $this->map = $newMap;
    }

    public function getPlayermap()
    {
        return $this->playermap;
    }

    public function setPlayermap($newPlayermap)
    {
        $this->playermap = $newPlayermap;
    }

    public function showMap($selectMap)
    {
        for ($column = 0; $column <= count($selectMap[0]); $column++) {
            echo " - ";
        }
        echo "\n";
        for ($line = 0; $line < count($selectMap); $line++) {
            echo "| ";
            for ($cell = 0; $cell < count($selectMap[$line]); $cell++) {
                echo " ";
                if ($selectMap[$line][$cell] == 's') {
                    // var_dump($selectMap);
                    $selectMap[$line][$cell] = 'p';
                }
                echo $selectMap[$line][$cell];

                echo " ";
            }
            echo " | \n";
        }
        for ($column = 0; $column <= count($selectMap[0]); $column++) {
            echo " - ";
        }
    }


    public function showPostion($selectMap)
    {

        echo "\n";
        for ($line = 0; $line < count($selectMap); $line++) {
            for ($cell = 0; $cell < count($selectMap[$line]); $cell++) {
                // if ($selectMap[$line][$cell] == 's') {
                //     echo 'cc';
                //      $selectMap[$line][$cell] = 'p';
                // }
            }
        }
        for ($column = 0; $column <= count($selectMap[0]); $column++) {
        }
    }



    public function getInfoMap($x, $y)
    {
        if (is_numeric($x) && is_numeric($y)) {
            return $this->map[$x][$y];
        }
    }
    public function setMapId($x, $y, $info)
    {
        if (is_numeric($x) && is_numeric($y)) {
            return $this->map[$x][$y] = $info;
        }
    }
}
