<?php
class  AA{
public $name;
private $email;



public function get_name()
{
    return $this->email;
}


}

$obj = new AA();

$obj->name="Aakash";
$obj->email="aakashvip27@gmail.com";//this getting error because this is private

echo $obj->get_name();
?>