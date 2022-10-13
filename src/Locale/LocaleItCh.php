<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LocaleItCh
 */
class LocaleItCh extends LocaleIt
{
    public function territory()
    {
        return new TerritoryCh();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::APOSTROPHE,
        ];
    }
}
