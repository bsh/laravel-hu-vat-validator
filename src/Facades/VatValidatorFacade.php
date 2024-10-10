<?php

namespace bsh\LaravelHuVatValidator\Facades;

use bsh\LaravelHuVatValidator\Validators\VatValidator;
use Illuminate\Support\Facades\Facade;

/**
 * @method bool validate(string $vatNumber)
 */
class VatValidatorFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return VatValidator::class;
    }
}
