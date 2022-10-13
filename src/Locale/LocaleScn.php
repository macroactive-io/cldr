<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageScn;

/**
 * Class LocaleScn - Sicilain
 * @psalm-immutable
 */
class LocaleScn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Sicilianu';
    }

    public function endonymSortable(): string
    {
        return 'SICILIANU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageScn();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
