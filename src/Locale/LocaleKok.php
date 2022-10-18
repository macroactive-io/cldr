<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKok;

/**
 * Konkani
 *
 * @psalm-immutable
 */
class LocaleKok extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'कोंकणी';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKok();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
