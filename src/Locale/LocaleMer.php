<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMer;

/**
 * Class LocaleMer - Meru
 */
class LocaleMer extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kĩmĩrũ';
    }

    public function endonymSortable()
    {
        return 'KIMIRU';
    }

    public function language()
    {
        return new LanguageMer();
    }
}
