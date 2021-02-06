<?php

namespace Hexlet\Validator;

use Hexlet\Validator\Validators\ValidatorInterface;

class Validator
{
    public function make(string $type): ValidatorInterface
    {
        $typeName = ucfirst($type);
        $className = __NAMESPACE__ . "\\Validators\\{$typeName}Validator";
        return new $className();
    }

    public function string(): ValidatorInterface
    {
        return $this->make('string');
    }
}