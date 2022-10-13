<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Variant\VariantPosix;

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
