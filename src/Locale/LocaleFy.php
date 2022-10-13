<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFy;

/**
 * Class LocaleFy - Western Frisian
 */
class LocaleFy extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Frysk';
    }

    public function endonymSortable()
    {
        return 'FRYSK';
    }

    public function language()
    {
        return new LanguageFy();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
