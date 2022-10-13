<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryXk;

/**
 * Class LocaleSrCyrlXk
 */
class LocaleSrCyrlXk extends LocaleSrCyrl
{
    public function territory()
    {
        return new TerritoryXk();
    }
}
