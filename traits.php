<?php 
trait all_message{

    public function msg1()
    {
        return "Hello this is first message";
    }
    
}

class AA {

    use all_message;
}


$obj = new AA();

echo $obj->msg1();
?>