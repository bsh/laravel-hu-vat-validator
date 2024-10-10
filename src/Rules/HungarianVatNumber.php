<?php

namespace bsh\LaravelHuVatValidator\Rules;

use bsh\LaravelHuVatValidator\Facades\VatValidatorFacade as VatValidator;
use Illuminate\Contracts\Validation\ValidationRule;

class HungarianVatNumber implements ValidationRule
{
    public function validate(string $attribute, mixed $value, \Closure $fail): void
    {
        if (VatValidator::validate($value)) {
            return;
        }

        $fail(__('hu-vat-validator::validation.hu_vat_number', ['attribute' => $attribute]));
    }
}
