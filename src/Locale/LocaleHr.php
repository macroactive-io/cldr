<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHr;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Croatian
 *
 * @psalm-immutable
 */
class LocaleHr extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'croatian_ci';
    }

    public function endonym(): string
    {
        return 'hrvatski';
    }

    public function endonymSortable(): string
    {
        return 'HRVATSKI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHr();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    /**
     * How to format a floating point number (%s) as a percentage.
     * @psalm-immutable
     */
    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
