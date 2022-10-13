<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKab;

/**
 * Class LocaleKab - Kabyle
 * @psalm-immutable
 */
class LocaleKab extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Taqbaylit';
    }

    public function endonymSortable(): string
    {
        return 'TAQBAYLIT';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKab();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
