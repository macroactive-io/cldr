<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSah;

/**
 * Class LocaleSah - Sakha
 * @psalm-immutable
 */
class LocaleSah extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'саха тыла';
    }

    public function endonymSortable(): string
    {
        return 'САХА ТЫЛА';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSah();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
