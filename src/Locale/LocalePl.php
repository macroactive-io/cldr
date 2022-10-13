<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePl;

/**
 * Class LocalePl - Polish
 * @psalm-immutable
 */
class LocalePl extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'polish_ci';
    }

    public function endonym(): string
    {
        return 'polski';
    }

    public function endonymSortable(): string
    {
        return 'POLSKI';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePl();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }
}
