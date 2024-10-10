<?php

namespace bsh\LaravelHuVatValidator;

use bsh\LaravelHuVatValidator\Rules\HungarianVatNumber;
use bsh\LaravelHuVatValidator\Validators\VatValidator;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class LaravelHuVatValidatorServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'hu-vat-validator');

        $this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/hu-vat-validator'),
        ]);

        Validator::extend('hu_vat_number', static function ($attribute, $value, $parameters, $validator): void {
            $rule = new HungarianVatNumber();
            $rule->validate($attribute, $value, static fn (string $message = null): null => null);
        });
    }

    public function register(): void
    {
        $this->app->singleton(VatValidator::class, static fn (Container $app): VatValidator => new VatValidator());

    }
}
