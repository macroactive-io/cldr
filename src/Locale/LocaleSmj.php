<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSmj;

/**
 * @psalm-immutable
 */
class LocaleSmj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'julevsámegiella';
    }

    public function endonymSortable(): string
    {
        return 'JULEVSAMEGIELLA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSmj();
    }
}
