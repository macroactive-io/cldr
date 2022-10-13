<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCu;

/**
 * Class LocaleEsCu
 */
class LocaleEsCu extends LocaleEs
{
    public function territory()
    {
        return new TerritoryCu();
    }
}
