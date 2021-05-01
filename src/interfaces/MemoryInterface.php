<?php
interface MemoryInterface {
    public function set(int $address, ?int $value);
    public function get(int $address);
    public function clear();
}