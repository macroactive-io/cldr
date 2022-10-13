<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\Territory001;

/**
 * Class LocaleIaFr
 */
class LocaleIa001 extends LocaleIa
{
    public function territory()
    {
        return new Territory001();
    }
}
