<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageOs;
use Macroactive\Cldr\Territory\TerritoryInterface;
use Macroactive\Cldr\Territory\TerritoryRu;

/**
 * Ossetic
 *
 * @psalm-immutable
 */
class LocaleOs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ирон';
    }

    public function endonymSortable(): string
    {
        return 'ИРОН';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOs();
    }

    public function territory(): TerritoryInterface
    {
        return new TerritoryRu();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
