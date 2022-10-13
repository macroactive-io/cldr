<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySg;

/**
 * Class LocaleTaSg
 */
class LocaleTaSg extends LocaleTa
{
    public function territory()
    {
        return new TerritorySg();
    }

    protected function digitsGroup()
    {
        return 3;
    }
}
