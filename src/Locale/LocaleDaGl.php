<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryGl;

/**
 * Class LocaleDaGl
 * @psalm-immutable
 */
class LocaleDaGl extends LocaleDa
{
    public function territory(): TerritoryGl
    {
        return new TerritoryGl();
    }
}
