<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryCh;

/**
 * Class LocaleItCh
 * @psalm-immutable
 */
class LocaleItCh extends LocaleIt
{
    public function territory(): TerritoryCh
    {
        return new TerritoryCh();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP => self::APOSTROPHE,
        ];
    }
}
