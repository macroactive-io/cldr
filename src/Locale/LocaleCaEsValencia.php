<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Variant\VariantValencia;

/**
 * Class LocaleCaEsValencia
 */
class LocaleCaEsValencia extends LocaleCaEs
{
    public function variant()
    {
        return new VariantValencia();
    }
}
