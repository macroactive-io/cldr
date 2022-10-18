<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAng;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleAng - Anglo-Saxon / Old-English
 * @psalm-immutable
 */
class LocaleAng extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ænglisc';
    }

    public function endonymSortable(): string
    {
        return 'ÆNGLISC';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAng();
    }
}
