<?php

namespace vendor\lib\classes;
use vendor\lib\interfaces\IDraw;

class MyLine implements IDraw
{
    protected $Point1X;
    protected $Point1Y;
    protected $Point2X;
    protected $Point2Y;

    function DrawFigure(){
        echo "Draw Line";
    }

}