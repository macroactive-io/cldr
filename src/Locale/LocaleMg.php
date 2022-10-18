<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMg;

/**
 * Malagasy
 *
 * @psalm-immutable
 */
class LocaleMg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Malagasy';
    }

    public function endonymSortable(): string
    {
        return 'MALAGASY';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMg();
    }
}
