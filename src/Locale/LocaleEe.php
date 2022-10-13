<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEe;

/**
 * Class LocaleEe - Ewe
 */
class LocaleEe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Eʋegbe';
    }

    public function endonymSortable()
    {
        return 'EWEGBE';
    }

    public function language()
    {
        return new LanguageEe();
    }
}
