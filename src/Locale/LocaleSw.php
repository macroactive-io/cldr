<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSw;

/**
 * Swahili
 *
 * @psalm-immutable
 */
class LocaleSw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kiswahili';
    }

    public function endonymSortable(): string
    {
        return 'KISWAHILI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSw();
    }
}
