<?php 

class AA {

    public $name;
    public $email;


    public function set_name($name , $email)
    {
$this->name = $name;
$this->email = $email;

    }

public function get_name()
{

    return $this->name . $this->email;

}
}

$obj = new AA();

$obj->set_name("Aakash" , "aakash@gmail.com");
echo $obj->get_name();

?>