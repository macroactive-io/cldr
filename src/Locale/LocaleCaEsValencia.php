<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Variant\VariantValencia;

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
