<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBy;

/**
 * Class LocaleRuBy
 * @psalm-immutable
 */
class LocaleRuBy extends LocaleRu
{
    public function territory(): TerritoryBy
    {
        return new TerritoryBy();
    }
}
