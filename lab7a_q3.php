<?php
function calculateArea($width, $length)
{
    return $width * $length;
}

$width = 4;
$length = 2;
$area = calculateArea($width, $length);
?>

<span style="border: 1px solid">
    The area of a rectangle with width <?= $width ?> and length <?= $length ?> is <?= $area ?>.
</span>