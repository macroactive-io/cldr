<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSeh;

/**
 * Class LocaleSeh - Sena
 * @psalm-immutable
 */
class LocaleSeh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'sena';
    }

    public function endonymSortable(): string
    {
        return 'SENA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSeh();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
