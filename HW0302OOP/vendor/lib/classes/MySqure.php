<?php

namespace vendor\lib\classes;


class MySqure extends MyFigure
{
    protected $sideA;

    function DrawFigure(){
        echo "Draw Squre";
    }

    function CalcPerimetr(){
        echo "Calculate perimetr of Squre";
    }

    function CalcArea(){
        echo "Calculate aria of Squre";
    }

}