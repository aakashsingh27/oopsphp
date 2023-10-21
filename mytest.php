<?php 

Interface BB {
public function hello();
}


trait aa {
function Vikas()
{
   return  "Hello this is trait function ";
}
}


class aakash implements BB{

    public $name;
    public $email;
public $mobile;
use aa;


public static function bottet()
{
    echo "Helo this is static function ";
}



function hello()
{
echo "Hello";

}


public function __construct($mbel)
{
    $this->mobile=$mbel;

}

public function __destruct()
{
    echo  $this->mobile;
}

    public function set_name($neem , $email)
{
$this->name = $neem;
$this->email = $email;   
}
 
function get_name()
{
    return "My name is ".$this->name." and email is ".$this->email;
}

}

class golu extends aakash {

    public function get_email()
    {
       return "Your Entered email is ".$this->email; 
    }
}


$obj = new golu('7701931016');

$obj->set_name('Aakash singh' , "aakashvip27@gmail.com");
echo $obj->get_name()."<br>";
echo $obj->get_email();
echo $obj->hello()."<br>";

aakash::bottet()."<br>";



echo $obj->vikas();
?>