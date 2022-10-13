<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleIa - Interlingua
 * @psalm-immutable
 */
class LocaleIa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'interlingua';
    }

    public function endonymSortable(): string
    {
        return 'INTERLINGUA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIa();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
