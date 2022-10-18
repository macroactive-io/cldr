<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKl;

/**
 * Class LocaleKl - Kalaallisut
 * @psalm-immutable
 */
class LocaleKl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kalaallisut';
    }

    public function endonymSortable(): string
    {
        return 'KALAALLISUT';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKl();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::DOT,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
