<?php
require_once 'DefaultException.php';
class InvalidMemoryAddress extends DefaultException
{
    private $errors = [];

    public function __construct(
        $errors = [],
        $message = 'Erro de endereçamento na memória',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }

    public function get($att)
    {
        return $this->errors[$att];
    }
}
