<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCu;

/**
 * Class LocaleEsCu
 * @psalm-immutable
 */
class LocaleEsCu extends LocaleEs
{
    public function territory(): TerritoryCu
    {
        return new TerritoryCu();
    }
}
