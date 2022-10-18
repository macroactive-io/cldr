<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Variant\VariantPosix;

/**
 * Class LocaleEnUsPosix
 * @psalm-immutable
 */
class LocaleEnUsPosix extends LocaleEnUs
{
    public function numberSymbols(): array
    {
        return [
            self::GROUP => '',
        ];
    }

    public function variant(): VariantPosix
    {
        return new VariantPosix();
    }
}
