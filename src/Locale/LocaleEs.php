<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEs;
use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Territory\TerritoryEs;
use Macroactive\Cldr\Territory\TerritoryInterface;

/**
 * Class LocaleEs - Spanish
 * @psalm-immutable
 */
class LocaleEs extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'spanish_ci';
    }

    public function endonym(): string
    {
        return 'español';
    }

    public function endonymSortable(): string
    {
        return 'ESPANOL';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEs();
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryEs();
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
