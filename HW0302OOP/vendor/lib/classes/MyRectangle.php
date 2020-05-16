<?php

namespace vendor\lib\classes;

class MyRectangle extends MySqure
{
    protected $sideB;

    function DrawFigure(){
        echo "Draw Rectangle";
    }

    function CalcPerimetr(){
        echo "Calculate perimetr of Rectangle";
    }

    function CalcArea(){
        echo "Calculate aria of Rectangle";
    }

}