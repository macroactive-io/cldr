<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKln;

/**
 * Kalenjin
 *
 * @psalm-immutable
 */
class LocaleKln extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kalenjin';
    }

    public function endonymSortable(): string
    {
        return 'KALENJIN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKln();
    }
}
