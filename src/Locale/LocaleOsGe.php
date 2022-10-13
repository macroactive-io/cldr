<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGe;
use Fisharebest\Localization\Territory\TerritoryInterface;

/**
 * Class LocaleOsGe
 * @psalm-immutable
 */
class LocaleOsGe extends LocaleOs
{
    public function territory(): TerritoryInterface
    {
        return new TerritoryGe();
    }
}
