<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFf;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleFf - Fulah
 * @psalm-immutable
 */
class LocaleFf extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Pulaar';
    }

    public function endonymSortable(): string
    {
        return 'PULAAR';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFf();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
