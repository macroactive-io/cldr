<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKw;

/**
 * Cornish
 *
 * @psalm-immutable
 */
class LocaleKw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kernewek';
    }

    public function endonymSortable(): string
    {
        return 'KERNEWEK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKw();
    }
}
