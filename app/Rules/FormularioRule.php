<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class FormularioRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if(str_word_count($value) < 10){
            $fail('O campo :attribute deve ter no mínimo 10 palavras.');
        }
        if(strlen($value) > 10000){
            $fail('O campo :attribute deve ter no máximo 10000 caracteres.');
        }
    }
}
