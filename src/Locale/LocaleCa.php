<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCa;

/**
 * Class LocaleCa - Catalan
 */
class LocaleCa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'català';
    }

    public function endonymSortable()
    {
        return 'CATALA';
    }

    public function language()
    {
        return new LanguageCa();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
