<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSsy;

/**
 * Class LocaleSsy - Saho
 * @psalm-immutable
 */
class LocaleSsy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Saho';
    }

    public function endonymSortable(): string
    {
        return 'SAHO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSsy();
    }
}
