<?php 
class AA 
{
public $name;
public $email;
    public function __construct($name , $email)
    {
    $this->name = $name;
    $this->email= $email;

    }

    public function get_name()
    {
return "Hello " .$this->name ." ". $this->email;
    }
}

$obj = new AA('Aakash',"aakashvip27@gmail.com");

echo $obj->get_name();
?>