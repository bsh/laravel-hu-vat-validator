<?php

namespace bsh\LaravelHuVatValidator;

use bsh\LaravelHuVatValidator\Facades\VatValidatorFacade as VatValidator;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class LaravelHuVatValidatorServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadTranslationsFrom(realpath(__DIR__ . '/..').'/resources/lang', 'laravel-hu-vat-validator');

        $this->publishes([
            realpath(realpath(__DIR__ . '/..').'/resources/lang') => $this->app->langPath('vendor/laravel-hu-vat-validator'),
        ], 'laravel-hu-vat-validator-lang');

        Validator::extend('hu_vat_number', static function ($attribute, $value, $parameters, $validator): bool {
            if (! VatValidator::validate($value)) {
                $validator->setCustomMessages(['hu_vat_number' => __('laravel-hu-vat-validator::validation.hu_vat_number')]);

                return false;
            }

            return true;
        });
    }

    public function register(): void
    {
        $this->app->singleton(VatValidator::class, static fn (Container $app): VatValidator => new VatValidator());
    }
}
