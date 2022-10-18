<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCy;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleCy - Welsh
 * @psalm-immutable
 */
class LocaleCy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Cymraeg';
    }

    public function endonymSortable(): string
    {
        return 'CYMRAEG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCy();
    }
}
