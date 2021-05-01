<?php
require_once 'hardware/Memory.php';
require_once 'hardware/Register.php';
class CPU
{
    private $memory, $register, $pc;
    function __construct()
    {
        $this->memory = new Memory();
        $this->register = new Register();
        $this->pc = 1;
    }
    public function load(int $address)
    {
        $addrPointerValue = $this->memory->get($address);
        if ($addrPointerValue === null) return $this->register->set(0);
        $this->register->set($addrPointerValue);
    }
    public function store(int $address)
    {
        $this->memory->set($address, $this->register->get());
    }
    public function add(int $address)
    {
        $addrPointerValue = $this->memory->get($address);
        $this->register->set($this->register->get() + $addrPointerValue);
    }
    public function addi(int $value)
    {
        $this->register->set($this->register->get() + $value);
    }
    public function sub(int $address)
    {
        $addrPointerValue = $this->memory->get($address);
        $this->register->set($this->register->get() - $addrPointerValue);
    }
    public function subi(int $value)
    {
        $this->register->set($this->register->get() - $value);
    }
    public function mult(int $address)
    {
        $addrPointerValue = $this->memory->get($address);
        $this->register->set($this->register->get() * $addrPointerValue);
    }
    public function multi(int $value)
    {
        $this->register->set($this->register->get() * $value);
    }
    public function div(int $address)
    {
        $addrPointerValue = $this->memory->get($address);
        $this->register->set($this->register->get() / $addrPointerValue);
    }
    public function divi(int $value)
    {
        $this->register->set($this->register->get() / $value);
    }
    public function jump(int $line)
    {
        $this->setPC($line - 1);
    }
    public function jpos(int $line)
    {
        if ($this->register->get() > 0) {
            $this->setPC($line - 1);
        }
    }
    public function jzero(int $line)
    {
        if ($this->register->get() == 0) {
            $this->setPC($line - 1);
        }
    }


    public function addPC()
    {
        $this->pc += 1;
    }
    public function getPC()
    {
        return $this->pc;
    }
    public function setPC(int $value)
    {
        $this->pc = $value;
    }
    public function getMemory()
    {
        return $this->memory->getAll();
    }
    public function getRegister()
    {
        return $this->register->get();
    }
}
