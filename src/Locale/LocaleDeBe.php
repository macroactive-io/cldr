<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBe;

/**
 * Class LocaleDeBe
 */
class LocaleDeBe extends LocaleDe
{
    public function territory()
    {
        return new TerritoryBe();
    }
}
