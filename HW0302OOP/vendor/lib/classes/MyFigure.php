<?php

namespace vendor\lib\classes;

use vendor\lib\interfaces\ICalcArea;
use vendor\lib\interfaces\ICalcPerimetr;
use vendor\lib\interfaces\IDraw;

abstract class MyFigure implements IDraw, ICalcArea, ICalcPerimetr{

    protected $PosX;
    protected $PosY;
   
}