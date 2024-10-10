<?php

namespace bsh\LaravelHuVatValidator\Tests;

use bsh\LaravelHuVatValidator\Validators\VatValidator;
use PHPUnit\Framework\TestCase;

class VatValidatorTest extends TestCase
{
    public function testValidHungarianVat(): void
    {
        $validVat = '10537914-4-44';
        $this->assertTrue(VatValidator::validate($validVat));
    }

    public function testInvalidHungarianVatFormat(): void
    {
        $invalidVat = '1234567-1-02';
        $this->assertFalse(VatValidator::validate($invalidVat));
    }

    public function testInvalidHungarianVatChecksum(): void
    {
        $invalidVat = '12345678-1-03';
        $this->assertFalse(VatValidator::validate($invalidVat));
    }

    public function testInvalidHungarianVatRegionCode(): void
    {
        $invalidVat = '12345678-1-99';
        $this->assertFalse(VatValidator::validate($invalidVat));
    }
}
