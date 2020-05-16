<?php

namespace vendor\lib\classes;
use vendor\lib\interfaces\IDraw;

class MyPoint2D implements IDraw
{
    protected $PointX;
    protected $PointY;

    function DrawFigure(){
        echo "Draw MyPoint2D";
    }

}