<?php

namespace App\Shape\Exceptions;

class ShapeUnknowException extends \Exception
{
    public function __construct(string $message, int $codeError)
    {
        parent::__construct($message, $codeError);
        var_dump($this->getMessage());
    }

}

