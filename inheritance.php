<?php 
class AA {

   public $name;

   protected  $emai ='jguhjb';

   public function set_name($name)
   {
$this->name=$name;

   } 
   public function get_name()
   {

    return $this->name;
   }
}

class BB extends AA 
{
    public function get_email()
    {
        return $this->emai;
    }
}

$obj = new BB();

$obj->set_name('Vishal');
echo $obj->get_name()."<br>";
echo $obj->get_email();
?>