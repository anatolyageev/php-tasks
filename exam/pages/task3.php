<?php

$out=array();
foreach(file('data.txt') as $v){
    $out[] = explode('#',$v);
}


$tbl = '<table>';
foreach($out as $v){
    $tbl .= '<tr><td>'.join("</td><td>",$v)."</td></tr>";
}
$tbl .= '</table>';
echo $tbl;
