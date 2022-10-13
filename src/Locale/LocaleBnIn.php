<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleBnIn
 * @psalm-immutable
 */
class LocaleBnIn extends LocaleBn
{
    public function territory(): TerritoryIn
    {
        return new TerritoryIn();
    }
}
