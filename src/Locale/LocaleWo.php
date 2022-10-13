<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageWo;

/**
 * Class LocaleWo - Wo
 */
class LocaleWo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Wolof';
    }

    public function endonymSortable()
    {
        return 'WOLOF';
    }

    public function language()
    {
        return new LanguageWo();
    }

    public function numberSymbols()
    {
        return [
            self::DECIMAL => self::COMMA,
            self::GROUP   => self::DOT,
        ];
    }
}
