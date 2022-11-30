<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKsh;

/**
 * Colognian
 *
 * @psalm-immutable
 */
class LocaleKsh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kölsch';
    }

    public function endonymSortable(): string
    {
        return 'KOLSCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKsh();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
