<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageWa;

/**
 * Class LocaleWa - Walloon
 * @psalm-immutable
 */
class LocaleWa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Walon';
    }

    public function endonymSortable(): string
    {
        return 'WALON';
    }

    public function language(): LanguageInterface
    {
        return new LanguageWa();
    }
}
