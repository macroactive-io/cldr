<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritorySg;

/**
 * Class LocaleMsSg
 */
class LocaleMsSg extends LocaleMs
{
    public function territory()
    {
        return new TerritorySg();
    }
}
