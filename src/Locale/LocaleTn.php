<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTn;

/**
 * Class LocaleTn - Tswana
 */
class LocaleTn extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Setswana';
    }

    public function endonymSortable()
    {
        return 'SETSWANA';
    }

    public function language()
    {
        return new LanguageTn();
    }

    public function numberSymbols()
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
