<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLuo;

/**
 * Class LocaleLuo - Luo
 * @psalm-immutable
 */
class LocaleLuo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Dholuo';
    }

    public function endonymSortable(): string
    {
        return 'DHOLUO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLuo();
    }
}
