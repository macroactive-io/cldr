<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageHsb;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleHsb - Upper Sorbian
 * @psalm-immutable
 */
class LocaleHsb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'hornjoserbšćina';
    }

    public function endonymSortable(): string
    {
        return 'HORNJOSERBSCINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHsb();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
