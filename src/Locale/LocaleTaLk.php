<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryLk;

/**
 * Class LocaleTaLk
 * @psalm-immutable
 */
class LocaleTaLk extends LocaleTa
{
    public function territory(): TerritoryLk
    {
        return new TerritoryLk();
    }
}
