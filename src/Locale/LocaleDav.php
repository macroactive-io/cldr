<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDav;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleDav - Taita
 * @psalm-immutable
 */
class LocaleDav extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kitaita';
    }

    public function endonymSortable(): string
    {
        return 'KITAITA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDav();
    }
}
