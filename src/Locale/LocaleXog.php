<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageXog;

/**
 * Class LocaleXog - Soga
 * @psalm-immutable
 */
class LocaleXog extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Olusoga';
    }

    public function endonymSortable(): string
    {
        return 'OLUSOGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageXog();
    }
}
