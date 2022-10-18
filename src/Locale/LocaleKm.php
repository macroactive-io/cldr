<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKm;

/**
 * Khmer
 *
 * @psalm-immutable
 */
class LocaleKm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ខ្មែរ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKm();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
