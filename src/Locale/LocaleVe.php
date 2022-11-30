<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageVe;

/**
 * Venda
 *
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

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
