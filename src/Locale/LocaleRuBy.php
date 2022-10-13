<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBy;

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
