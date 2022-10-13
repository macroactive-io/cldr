<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySt;

/**
 * Class LocalePtSt
 * @psalm-immutable
 */
class LocalePtSt extends LocalePt
{
    public function territory(): TerritorySt
    {
        return new TerritorySt();
    }
}
