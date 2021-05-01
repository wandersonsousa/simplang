<?php
require_once './src/exceptions/InvalidMemoryAddress.php';

class Register
{
    private $cell;
    function __construct()
    {
        $this->cell = $this->createCell();
    }
    private function createCell()
    {
        return 0;
    }
    public function set(?int $value)
    {
        $this->cell = $value;
    }
    public function get()
    {
        return $this->cell;
    }
    public function clear()
    {
        $this->cell = $this->createCell();
    }
}
