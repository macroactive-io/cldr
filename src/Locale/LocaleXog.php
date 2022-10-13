<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageXog;

/**
 * Class LocaleXog - Soga
 */
class LocaleXog extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Olusoga';
    }

    public function endonymSortable()
    {
        return 'OLUSOGA';
    }

    public function language()
    {
        return new LanguageXog();
    }
}
