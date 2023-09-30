<?php 
interface myinterface{
    public function pig();
    public function donkey();
}

class BB implements myinterface {

    public function pig()
    {
        return "THis is pig function from interface"."<br>";
    }
    public function donkey()
    {
        return "THis is Donkey function from interface";
    } 
}

class CC extends BB
{

    public function horse()
    {
        return "This is horse functin ";
    }
}


class DD{

    public function bottle(){

        return "HEllo Bottle ";
    }
}

$obj = new CC();
echo $obj->pig();
echo $obj->donkey()."<br>";
echo $obj->horse()."<br>";



$dd_obj = new DD();

echo $dd_obj->bottle();
?>