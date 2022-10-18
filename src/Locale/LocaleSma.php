<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSma;

/**
 * @psalm-immutable
 */
class LocaleSma extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Åarjelsaemien gïele';
    }

    public function endonymSortable(): string
    {
        return 'AARJELSAMIEN GIELE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSma();
    }
}
