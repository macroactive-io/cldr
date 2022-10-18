<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKsb;

/**
 * Class LocaleKsb - Shambala
 * @psalm-immutable
 */
class LocaleKsb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kishambaa';
    }

    public function endonymSortable(): string
    {
        return 'KISHAMBAA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKsb();
    }
}
