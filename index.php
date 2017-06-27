<?php


function fackalk( $fack )
{
    $res = "1";
    for($i = 1; $i <= $fack; $i++)
        $res = bcmul($res, $i );
    return $res;
}
if( $_GET['fack'] < 1 || $_GET['fack'] > 1000 )
{
    exit();
}
else
{
    echo fackalk( $_GET['fack'] );
}
?>