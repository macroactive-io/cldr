<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Variant\VariantPosix;

/**
 * @psalm-immutable
 */
class LocaleEnUsPosix extends LocaleEnUs
{
    protected function numberSymbols(): array
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
