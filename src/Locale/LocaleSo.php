<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSo;

/**
 * Somali
 *
 * @psalm-immutable
 */
class LocaleSo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Soomaali';
    }

    public function endonymSortable(): string
    {
        return 'SOOMAALI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSo();
    }
}
