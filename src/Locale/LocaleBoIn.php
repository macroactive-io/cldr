<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleBoIn
 */
class LocaleBoIn extends LocaleBo
{
    public function territory()
    {
        return new TerritoryIn();
    }
}
