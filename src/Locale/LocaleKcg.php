<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKcg;

/**
 * Tyap
 *
 * @psalm-immutable
 */
class LocaleKcg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tyap';
    }

    public function endonymSortable(): string
    {
        return 'TYAP';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKcg();
    }
}
