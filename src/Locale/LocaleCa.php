<?php

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCa;

/**
 * Class LocaleCa - Catalan
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPLv3+
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
        return array(
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        );
    }
}
