<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleBoIn
 * @psalm-immutable
 */
class LocaleBoIn extends LocaleBo
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
