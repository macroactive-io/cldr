<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryMo;

/**
 * Class LocalePtMo
 * @psalm-immutable
 */
class LocalePtMo extends LocalePt
{
    public function territory(): TerritoryMo
    {
        return new TerritoryMo();
    }
}
