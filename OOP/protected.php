<?php

class Secure
{
    protected $secrete = 'Codes';
}

class Test extends Secure
{
    public function print()
    {
        echo $this->secrete;
    }
}

$class = new Test();
// OOP structures do not allow to access protected properties outside of the class or its subclasses
// echo $class->secrete; // This will cause an error

?>