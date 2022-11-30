<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\Territory150;

/**
 * @psalm-immutable
 */
class LocaleEn150 extends LocaleEn
{
    public function territory(): Territory150
    {
        return new Territory150();
    }
}
