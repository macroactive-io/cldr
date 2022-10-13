<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageOs;
use Fisharebest\Localization\Territory\TerritoryInterface;
use Fisharebest\Localization\Territory\TerritoryRu;

/**
 * Class LocaleOs - Ossetic
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

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
