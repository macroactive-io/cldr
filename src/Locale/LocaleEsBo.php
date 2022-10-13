<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\TerritoryBo;

/**
 * Class LocaleEsBo
 * @psalm-immutable
 */
class LocaleEsBo extends LocaleEs
{
    public function territory(): TerritoryBo
    {
        return new TerritoryBo();
    }
}
