<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAo;

/**
 * Class LocalePtAo
 */
class LocalePtAo extends LocalePt
{
    public function territory()
    {
        return new TerritoryAo();
    }
}
