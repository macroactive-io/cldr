<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAa;

/**
 * Class LocaleAa - Afar
 */
class LocaleAa extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Qafar';
    }

    public function endonymSortable()
    {
        return 'QAFAR';
    }

    public function language()
    {
        return new LanguageAa();
    }
}
