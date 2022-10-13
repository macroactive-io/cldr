<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSs;

/**
 * Class LocaleSs - Swati
 * @psalm-immutable
 */
class LocaleSs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Siswati';
    }

    public function endonymSortable(): string
    {
        return 'SISWATI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSs();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
