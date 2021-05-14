<?php
//simp virtual machine
require_once 'CPU.php';
class SVM
{
    private $CPU;
    private $instructions;
    private $execHistory;
    private $executionLimit;
    function __construct()
    {
        $this->instructions = [];
        $this->execHistory = [];
        $this->executionLimit = 500000;
        $this->CPU = new CPU();
        $this->addExecHistory();
    }
    private function addExecHistory($pc = false)
    {
        array_push($this->execHistory, $this->getState($pc));
    }
    private function getState($pc)
    {
        $state = [
            'memory' => $this->CPU->getMemory(),
            'register' => $this->CPU->getRegister(),
            'pc' => $this->CPU->getPC()
        ];
        if( $pc )$state['pc'] = $pc;
        return $state;
    }
    private function loadInstructions(string $raw_instructions):array
    {
        $instructions = json_decode($raw_instructions, true);
        return $instructions;
    }

    public function run(string $raw_instructions)
    {
        $this->instructions = $this->loadInstructions($raw_instructions);
        $lastInstructionIndex = count($this->instructions);
        $counter = 0; 
        while ($this->CPU->getPC() <= $lastInstructionIndex) {
            $instruction = $this->instructions[$this->CPU->getPC()];
            $instructionSplited = explode(" ", $instruction);
            $command = $instructionSplited[0];
            $argument = $instructionSplited[1];
            $langCommands = [
                'store', 'load', 'add', 'addi', 'sub', 'subi',
                'mul', 'muli', 'div', 'divi', 'jump', 'jpos', 'jzero'
            ];
            foreach ($langCommands as $availableCommand) {
                if ($command == $availableCommand) {
                    $previousPC = $this->CPU->getPC();
                    $this->CPU->{$command}($argument);
                }
            }
            $this->addExecHistory($previousPC);
            $this->CPU->addPC();
            if($counter >= $this->executionLimit ){
                break;
            }
            $counter++;
        }
    }
    public function getExecHistory()
    {
        return $this->execHistory;
    }
}
