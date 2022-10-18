<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEt;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleEt - Estonian
 * @psalm-immutable
 */
class LocaleEt extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'estonian_ci';
    }

    public function endonym(): string
    {
        return 'eesti';
    }

    public function endonymSortable(): string
    {
        return 'EESTI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEt();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function minimumGroupingDigits(): int
    {
        return 3;
    }
}
