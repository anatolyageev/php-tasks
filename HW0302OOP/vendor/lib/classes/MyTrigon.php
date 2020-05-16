<?php

namespace vendor\lib\classes;

class MyTrigon extends MyFigure
{
    protected $sideA;
    protected $sideB;
    protected $sideC;

    function DrawFigure(){
        echo "Draw Trigon";
    }

    function CalcPerimetr(){
        echo "Calculate perimetr of Trigon";
    }

    function CalcArea(){
        echo "Calculate aria of Trigon";
    }

}