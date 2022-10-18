<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageOr;

/**
 * Class LocaleOr - Oriya
 * @psalm-immutable
 */
class LocaleOr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ଓଡ଼ିଆ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOr();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
