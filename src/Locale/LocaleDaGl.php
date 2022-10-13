<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGl;

/**
 * Class LocaleDaGl
 */
class LocaleDaGl extends LocaleDa
{
    public function territory()
    {
        return new TerritoryGl();
    }
}
