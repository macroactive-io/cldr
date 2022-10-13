<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBy;

/**
 * Class LocaleRuBy
 */
class LocaleRuBy extends LocaleRu
{
    public function territory()
    {
        return new TerritoryBy();
    }
}
