<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEs;
use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Territory\TerritoryEs;
use Fisharebest\Localization\Territory\TerritoryInterface;

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
