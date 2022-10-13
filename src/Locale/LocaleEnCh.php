<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LocaleEnCh
 * @psalm-immutable
 */
class LocaleEnCh extends LocaleEn
{
    public function territory(): TerritoryCh
    {
        return new TerritoryCh();
    }
}
