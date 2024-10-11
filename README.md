<h1>Laravel HU VAT Validator</h1>
<p>
    <a href="https://packagist.org/packages/bsh/laravel-hu-vat-validator">Latest Version on Packagist</a> |
</p>
<p>
    <strong>laravel-hu-vat-validator</strong> is a package to validate Hungarian VAT numbers.
</p>
<h2>Installation</h2>
<p>You can install the package via composer:</p>
<pre><code>composer require bsh/laravel-hu-vat-validator</code></pre>
<p>The package will automatically register itself.</p>

<h2>Publishing Language Files</h2>
<p>After installing the package, you may want to publish the language files to customize the validation messages. Run the following command to publish the language files to your application's `resources/lang/vendor` directory:</p>
<pre><code>php artisan vendor:publish --tag=laravel-hu-vat-validator-lang</code></pre>

<h2>Usage</h2>
<pre><code>use bsh\LaravelHuVatValidator\Facades\VatValidatorFacade as VatValidator;

// Check VAT format
VatValidator::validate('12345678-1-23');</code></pre>
<h2>Validation</h2>
<p>The package registers a new validation rule.</p>
<ul>
<li><code>hu_vat_number</code>: The field under validation must be a valid Hungarian VAT number.</li>
</ul>

<h2>License</h2>
<p>The MIT License (MIT). Please see <a href="LICENSE.md">License File</a> for more information.</p>

<hr />

<h1>Laravel magyar adószám ellenőrzés</h1>
<p>
    A <strong>laravel-hu-vat-validator</strong> egy Laravel csomag a magyar adószámok ellenőrzésére.
</p>
<h2>Telepítés</h2>
<p>A csomag telepítése composer segítségével:</p>
<pre><code>composer require bsh/laravel-hu-vat-validator</code></pre>

<h2>Nyelvi fájlok közzététele</h2>
<p>A csomag telepítése után érdemes lehet közzétenni a nyelvi fájlokat, a magyar fordításhoz:</p>
<pre><code>php artisan vendor:publish --tag=laravel-hu-vat-validator-lang</code></pre>

<h2>Használat</h2>
<pre><code>use bsh\LaravelHuVatValidator\Facades\VatValidatorFacade as VatValidator;

// Adószám formátum ellenőrzése
VatValidator::validate('12345678-1-23');</code></pre>
<h2>Valitator</h2>
<p>A csomag egy új Validator szabályt regisztrál.</p>
<ul>
<li><code>hu_vat_number</code>: Az mezőnek érvényes magyar adószámnak kell lennie.</li>
</ul>

<h2>Licenc</h2>
<p>Az MIT Licenc (MIT). További információkért lásd a <a href="LICENSE.md">Licenc fájlt</a>.</p>
