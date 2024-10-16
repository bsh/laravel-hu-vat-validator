<?php

namespace bsh\LaravelHuVatValidator\Tests;

use bsh\LaravelHuVatValidator\Facades\VatValidatorFacade;
use bsh\LaravelHuVatValidator\Validators\VatValidator;
use Orchestra\Testbench\TestCase;

class VatValidatorFacadeTest extends TestCase
{
    public function testVatValidatorFacade(): void
    {
        $validator = new VatValidator();
        $fake_vat = 'is_a_fake_vat_string';

        self::assertEquals(
            $validator->validate($fake_vat),
            VatValidatorFacade::validate($fake_vat)
        );
    }
}
