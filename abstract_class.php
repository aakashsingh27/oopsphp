<?php 
abstract class AA
{
public $name = "Vishal";
    abstract public function set_snake();
}

class BB extends AA{

    public function set_snake()
    {
return "Hello Snake"." ".$this->name;
    }
}

$obj = new BB();
echo $obj->set_snake();
?>