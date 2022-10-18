<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHr;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleHr - Croatian
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

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    /**
     * How to format a floating point number (%s) as a percentage.
     */
    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
