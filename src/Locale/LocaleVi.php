<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageVi;

/**
 * Class LocaleVi - Vietnamese
 * @psalm-immutable
 */
class LocaleVi extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'vietnamese_ci';
    }

    public function endonym(): string
    {
        return 'Tiếng Việt';
    }

    public function endonymSortable(): string
    {
        return 'TIENG VIET';
    }

    public function language(): LanguageInterface
    {
        return new LanguageVi();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
