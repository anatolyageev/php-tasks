<?php

namespace vendor\lib\classes;

class MyEllipse extends MyCircle
{
    protected $sideB;

    function DrawFigure(){
        echo "Draw Ellipse";
    }

    function CalcPerimetr(){
        echo "Calculate perimetr of Ellipse";
    }

    function CalcArea(){
        echo "Calculate aria of Ellipse";
    }

}