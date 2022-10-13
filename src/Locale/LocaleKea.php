<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKea;

/**
 * Class LocaleKea - Kabuverdianu
 * @psalm-immutable
 */
class LocaleKea extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kabuverdianu';
    }

    public function endonymSortable(): string
    {
        return 'KABUVERDIANU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKea();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
