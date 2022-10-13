<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySe;

/**
 * Class LocaleSeSe
 * @psalm-immutable
 */
class LocaleSeSe extends LocaleSe
{
    public function territory(): TerritorySe
    {
        return new TerritorySe();
    }
}
