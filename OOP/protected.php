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
// OOP

?>