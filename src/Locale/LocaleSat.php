<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageSat;

/**
 * Class LocaleSat - Santali
 *
 * @psalm-immutable
 */
class LocaleSat extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ᱥᱟᱱᱛᱟᱲᱤ';
    }

    public function endonymSortable(): string
    {
        return 'ᱥᱟᱱᱛᱟᱲᱤ';
    }

    public function language(): LanguageSat
    {
        return new LanguageSat();
    }
}
