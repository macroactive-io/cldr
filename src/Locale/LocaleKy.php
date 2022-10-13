<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKy;

/**
 * Class LocaleKy - Kyrgyz
 * @psalm-immutable
 */
class LocaleKy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'кыргызча';
    }

    public function endonymSortable(): string
    {
        return 'КЫРГЫЗЧА';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKy();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
