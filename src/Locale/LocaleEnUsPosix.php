<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Variant\VariantPosix;

/**
 * Class LocaleEnUsPosix
 */
class LocaleEnUsPosix extends LocaleEnUs
{
    public function numberSymbols()
    {
        return [
            self::GROUP => '',
        ];
    }

    public function variant()
    {
        return new VariantPosix();
    }
}
