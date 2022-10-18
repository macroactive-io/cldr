<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSt;

/**
 * @psalm-immutable
 */
class LocaleSt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sesotho';
    }

    public function endonymSortable(): string
    {
        return 'SESOTHO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSt();
    }
}
