<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Variant\VariantValencia;

/**
 * Class LocaleCaEsValencia
 * @psalm-immutable
 */
class LocaleCaEsValencia extends LocaleCaEs
{
    public function variant(): VariantValencia
    {
        return new VariantValencia();
    }
}
