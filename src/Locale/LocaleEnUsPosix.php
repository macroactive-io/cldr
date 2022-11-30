<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Variant\VariantPosix;

/**
 * @psalm-immutable
 */
class LocaleEnUsPosix extends LocaleEnUs
{
    public function variant(): VariantPosix
    {
        return new VariantPosix();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP => '',
        ];
    }
}
