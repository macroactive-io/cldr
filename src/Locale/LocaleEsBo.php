<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\TerritoryBo;

/**
 * @psalm-immutable
 */
class LocaleEsBo extends LocaleEs
{
    public function territory(): TerritoryBo
    {
        return new TerritoryBo();
    }
}
