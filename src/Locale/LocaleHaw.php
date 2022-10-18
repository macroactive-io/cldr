<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHaw;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Hawaiian
 *
 * @psalm-immutable
 */
class LocaleHaw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ʻŌlelo Hawaiʻi';
    }

    public function endonymSortable(): string
    {
        return 'OLELO HAWAII';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHaw();
    }
}
