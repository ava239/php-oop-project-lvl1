<?php

namespace Hexlet\Validator\Validators;

use Closure;

class StringValidator extends Validator implements ValidatorInterface
{
    public function contains(string $text): ValidatorInterface
    {
        return $this->addValidator(function ($data) use ($text) {
            return str_contains($data, $text);
        });
    }

    public function minLength(int $length): ValidatorInterface
    {
        return $this->addValidator(function ($data) use ($length) {
            return mb_strlen($data) >= $length;
        });
    }

    public function required(): ValidatorInterface
    {
        return $this->addValidator(fn($data) => (bool) $data);
    }
}
