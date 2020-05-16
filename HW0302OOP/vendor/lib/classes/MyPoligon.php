<?php

namespace vendor\lib\classes;

class MyPoligon extends MyFigure
{
    protected $sides = [];
    

    function DrawFigure(){
        echo "Draw Poligon";
    }

    function CalcPerimetr(){
        echo "Calculate perimetr of Poligon";
    }

    function CalcArea(){
        echo "Calculate aria of Poligon";
    }

}