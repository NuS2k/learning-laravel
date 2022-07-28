<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidateNoExeFile implements Rule
{
    public function passes($attribute, $value)
    {
        $word = 'exe';
        $value->getClientOriginalExtension();

        return (bool) strcmp($value->getClientOriginalExtension(), $word);
    }

    public function message()
    {
        return 'The :attribute format no .exe File.';
    }
}
