<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAo;

/**
 * Class LocalePtAo
 * @psalm-immutable
 */
class LocalePtAo extends LocalePt
{
    public function territory(): TerritoryAo
    {
        return new TerritoryAo();
    }
}
