<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Variant\VariantInterface;
use Macroactive\Cldr\Variant\VariantTarask;

/**
 * Class LocaleBeTarask - Belarusian
 *
 * @psalm-immutable
 */
class LocaleBeTarask extends LocaleBe
{
    public function variant(): VariantInterface
    {
        return new VariantTarask();
    }
}
