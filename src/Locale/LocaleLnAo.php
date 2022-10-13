<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAo;

/**
 * Class LocaleLnAo
 * @psalm-immutable
 */
class LocaleLnAo extends LocaleLn
{
    public function territory(): TerritoryAo
    {
        return new TerritoryAo();
    }
}
