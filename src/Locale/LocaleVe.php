<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageVe;

/**
 * Class LocaleVe - Venda
 * @psalm-immutable
 */
class LocaleVe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tshivenḓa';
    }

    public function endonymSortable(): string
    {
        return 'TSHIVENDA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVe();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
