<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSv;

/**
 * Swedish
 *
 * @psalm-immutable
 */
class LocaleSv extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'swedish_ci';
    }

    public function endonym(): string
    {
        return 'svenska';
    }

    public function endonymSortable(): string
    {
        return 'SVENSKA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSv();
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
