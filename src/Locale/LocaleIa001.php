<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\Territory001;

/**
 * Class LocaleIaFr
 * @psalm-immutable
 */
class LocaleIa001 extends LocaleIa
{
    public function territory(): Territory001
    {
        return new Territory001();
    }
}
