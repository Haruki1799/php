<?php

function getSquare($base, $height)
{
    return $base * $height;
}
function getTriangle($base, $height)
{
    return $base * $height / 2;
}
function getTrapezoid($upperBase, $lowerBase, $height)
{
    return ($upperBase + $lowerBase) * $height / 2;
}

echo getSquare(5, 5) . "\n";
echo getTriangle(7, 8) . "\n";
echo getTrapezoid(4, 5, 4);
