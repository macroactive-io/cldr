<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCo;

/**
 * Class LocaleEsCo
 */
class LocaleEsCo extends LocaleEs
{
    public function territory()
    {
        return new TerritoryCo();
    }
}
