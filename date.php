<?php
function getDatesFromRange($start, $end, $format = 'Y-m-d') 
{
    $array = array();
    $interval = new DateInterval('P1D');

    $realEnd = new DateTime($end);
    $realEnd->add($interval);

    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);

    foreach($period as $date) 
	{ 
        $array[] = $date->format($format); 
    }

    return $array;
}

$date1=date('Y-m-d');
$date2=strtotime("+7 day", strtotime($date1));
$date2=date('Y-m-d',$date2);
$arr1=getDatesFromRange($date1, $date2);

print_r($arr1);
?>