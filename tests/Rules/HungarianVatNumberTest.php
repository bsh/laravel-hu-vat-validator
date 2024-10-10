<?php

namespace bsh\LaravelHuVatValidator\Tests\Rules;

use bsh\LaravelHuVatValidator\LaravelHuVatValidatorServiceProvider;
use bsh\LaravelHuVatValidator\Rules\HungarianVatNumber;
use Illuminate\Support\Facades\Validator;
use Orchestra\Testbench\TestCase;

class HungarianVatNumberTest extends TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LaravelHuVatValidatorServiceProvider::class,
        ];
    }

    public function testValidVatNumber(): void
    {
        $rule = ['vat_number' => [new HungarianVatNumber()]];
        $data = ['vat_number' => '10537914-4-44'];

        $validator = Validator::make($data, $rule);

        $this->assertTrue($validator->passes());
    }

    public function testInvalidVatNumber(): void
    {
        $rule = ['vat_number' => [new HungarianVatNumber()]];
        $data = ['vat_number' => 'invalid_vat_number'];

        $validator = Validator::make($data, $rule);

        $this->assertFalse($validator->passes());
    }
}
