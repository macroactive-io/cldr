<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEwo;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEwo - Ewondo
 * @psalm-immutable
 */
class LocaleEwo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ewondo';
    }

    public function endonymSortable(): string
    {
        return 'EWONDO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEwo();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
