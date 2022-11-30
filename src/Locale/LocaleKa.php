<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKa;

/**
 * Georgian
 *
 * @psalm-immutable
 */
class LocaleKa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ქართული';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKa();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }
}
