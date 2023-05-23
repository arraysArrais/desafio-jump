<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\Rule;

class Placa implements Rule
{
    public function __construct()
    {
    }

    public function passes($attribute, $value)
    {
        return preg_match('/^[a-zA-Z]{3}\-?[0-9][0-9a-zA-Z][0-9]{2}$/', $value) > 0;
    }

    public function message()
    {
        return 'Placa inválida';
    }
}
