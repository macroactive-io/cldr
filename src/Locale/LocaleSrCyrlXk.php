<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryXk;

/**
 * Class LocaleSrCyrlXk
 * @psalm-immutable
 */
class LocaleSrCyrlXk extends LocaleSrCyrl
{
    public function territory(): TerritoryXk
    {
        return new TerritoryXk();
    }
}
