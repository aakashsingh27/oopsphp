<?php 
function AA($num)
{
if($num <= 10)
{
    echo $num*2;
    echo "<br>";
AA($num+1);
}
}
AA(1);
?>