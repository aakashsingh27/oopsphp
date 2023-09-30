<?php 
class AA {

public $name;
public $email;

public function __construct($neme , $emnl)
{
$this->name = $neme;
$this->email = $emnl;
}
public function __destruct()
{
echo  $this->name."<br>";
echo $this->email;
}
}
$obj = new AA("Aakash" , "aakash@gmail.com");
?>