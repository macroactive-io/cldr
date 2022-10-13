<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEwo;

/**
 * Class LocaleEwo - Ewondo
 */
class LocaleEwo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'ewondo';
    }

    public function endonymSortable()
    {
        return 'EWONDO';
    }

    public function language()
    {
        return new LanguageEwo();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
