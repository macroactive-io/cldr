<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySt;

/**
 * Class LocalePtSt
 */
class LocalePtSt extends LocalePt
{
    public function territory()
    {
        return new TerritorySt();
    }
}
