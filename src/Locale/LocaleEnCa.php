<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryCa;

/**
 * Canadian English
 *
 * @psalm-immutable
 */
class LocaleEnCa extends LocaleEn
{
    public function endonym(): string
    {
        return 'Canadian English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH, CANADIAN';
    }

    public function territory(): TerritoryCa
    {
        return new TerritoryCa();
    }
}
