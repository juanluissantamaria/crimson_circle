<?php

namespace Crimsoncircle\Model;

class LeapYear
{
    public function isLeapYear(int? $year = NULL): int
    {
        //TODO: Logic must be implemented to calculate if a year is a leap year
        $year = ($year==NULL)? date('Y'):$year;
        return ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 );
    }
}