<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Territory\Territory419;

/**
 * Class LocaleEs419 - Latin American Spanish
 */
class LocaleEs419 extends LocaleEs
{
    public function endonym()
    {
        return 'español latinoamericano';
    }

    public function endonymSortable()
    {
        return 'ESPANOL LATINOAMERICANO';
    }

    public function numberSymbols()
    {
        return [
            self::GROUP   => self::COMMA,
            self::DECIMAL => self::DOT,
        ];
    }

    public function territory()
    {
        return new Territory419();
    }
}
