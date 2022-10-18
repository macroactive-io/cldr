<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageVun;

/**
 * Vunjo
 *
 * @psalm-immutable
 */
class LocaleVun extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kyivunjo';
    }

    public function endonymSortable(): string
    {
        return 'KYIVUNJO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVun();
    }
}
