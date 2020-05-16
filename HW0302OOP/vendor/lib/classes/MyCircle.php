<?php

namespace vendor\lib\classes;

class MyCircle extends MyFigure
{
    protected $radius;

    function DrawFigure(){
        echo "Draw Circle";
    }

    function CalcPerimetr(){
        echo "Calculate perimetr of Circle";
    }

    function CalcArea(){
        echo "Calculate aria of Circle";
    }

}