<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKaj;

/**
 * Class LocaleKaj - Jju
 * @psalm-immutable
 */
class LocaleKaj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Jju';
    }

    public function endonymSortable(): string
    {
        return 'JJU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKaj();
    }
}
