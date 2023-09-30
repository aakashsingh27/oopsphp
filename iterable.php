<?php 

function getIterable():iterable {

    return ["A" , "B" , "C"];
}

$myiterable = getIterable();

foreach($myiterable as $list)
{
    echo $list;
}

?>