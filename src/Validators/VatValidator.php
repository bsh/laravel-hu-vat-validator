<?php

namespace bsh\LaravelHuVatValidator\Validators;

class VatValidator
{
    public static function validate($value): bool
    {
        $huPattern = '/^\d{8}-[1-5]-\d{2}$/';

        if (preg_match($huPattern, (string) $value)) {
            $parts = explode('-', (string) $value);
            $vatNumber = $parts[0];
            $regionCode = $parts[2];

            $checksum = (int) $vatNumber[7];
            $weights = [9, 7, 3, 1, 9, 7, 3];
            $sum = 0;

            for ($i = 0; $i < 7; $i++) {
                $sum += (int) $vatNumber[$i] * $weights[$i];
            }

            $calculatedChecksum = (10 - ($sum % 10)) % 10;

            if ($calculatedChecksum !== $checksum) {
                return false;
            }

            $validRegionCodes = [
                '02', '22', '03', '23', '04', '24', '05', '25', '06', '26', '07', '27', '08', '28', '09', '29', '10',
                '30',
                '11', '31', '12', '32', '13', '33', '14', '34', '15', '35', '16', '36', '17', '37', '18', '38', '19',
                '39',
                '20', '40', '41', '42', '43', '44', '51',
            ];

            return in_array($regionCode, $validRegionCodes);
        }

        return false;
    }
}
