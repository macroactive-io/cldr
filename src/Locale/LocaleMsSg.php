<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySg;

/**
 * Class LocaleMsSg
 * @psalm-immutable
 */
class LocaleMsSg extends LocaleMs
{
    public function territory(): TerritorySg
    {
        return new TerritorySg();
    }
}
