<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageRm;

/**
 * Romansh
 *
 * @psalm-immutable
 */
class LocaleRm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'rumantsch';
    }

    public function endonymSortable(): string
    {
        return 'RUMANTSCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRm();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::APOSTROPHE,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
