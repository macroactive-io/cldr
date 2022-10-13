<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LocaleBnIn
 */
class LocaleBnIn extends LocaleBn
{
    public function territory()
    {
        return new TerritoryIn();
    }
}
