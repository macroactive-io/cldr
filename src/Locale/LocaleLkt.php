<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLkt;

/**
 * Class LocaleLkt - Lakota
 */
class LocaleLkt extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Lakȟólʼiyapi';
    }

    public function endonymSortable()
    {
        return 'LAKHOLIYAPI';
    }

    public function language()
    {
        return new LanguageLkt();
    }
}
