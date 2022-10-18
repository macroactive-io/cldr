<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDsb;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Lower Sorbian
 *
 * @psalm-immutable
 */
class LocaleDsb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'dolnoserbšćina';
    }

    public function endonymSortable(): string
    {
        return 'DOLNOSERBSCINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDsb();
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
