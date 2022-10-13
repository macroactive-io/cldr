<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSmn;

/**
 * Class LocaleSmn - Inari Sami
 * @psalm-immutable
 */
class LocaleSmn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'anarâškielâ';
    }

    public function endonymSortable(): string
    {
        return 'ANARASKIELA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSmn();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    public function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
