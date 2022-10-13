<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryAo;

/**
 * Class LocaleLnAo
 */
class LocaleLnAo extends LocaleLn
{
    public function territory()
    {
        return new TerritoryAo();
    }
}
