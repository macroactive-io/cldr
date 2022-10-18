<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCh;

/**
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
