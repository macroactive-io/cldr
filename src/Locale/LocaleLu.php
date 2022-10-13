<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLu;

/**
 * Class LocaleLu - Luba-Katanga
 */
class LocaleLu extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Tshiluba';
    }

    public function endonymSortable()
    {
        return 'TSHILUBA';
    }

    public function language()
    {
        return new LanguageLu();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
