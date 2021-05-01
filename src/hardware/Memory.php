<?php
require_once './src/exceptions/InvalidMemoryAddress.php';
require_once './src/interfaces/MemoryInterface.php';
class Memory implements MemoryInterface
{
    private $cells;
    function __construct()
    {
        $this->cells = $this->createCells();
    }
    private function createCells()
    {
        for ($i=1; $i < 99; $i++) {
            $cells[$i] = null;
        }
        return $cells;
    }
    private function checkAddress(int $address)
    {
        if ($address < 0 || $address > 100) throw new InvalidMemoryAddress();
    }
    public function set(int $address, ?int $value)
    {
        $this->checkAddress($address);
        $this->cells[$address] = $value;
    }
    public function get(int $address)
    {
        $this->checkAddress($address);
        return $this->cells[$address];
    }
    public function getAll()
    {
        return $this->cells;
    }
    public function clear()
    {
        $this->cells = $this->createCells();
    }
}
