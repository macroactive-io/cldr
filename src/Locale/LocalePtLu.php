<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLu;

/**
 * Class LocalePtLu
 * @psalm-immutable
 */
class LocalePtLu extends LocalePt
{
    public function territory(): TerritoryLu
    {
        return new TerritoryLu();
    }
}
