<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMg;

/**
 * Class LocaleMg - Malagasy
 */
class LocaleMg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Malagasy';
    }

    public function endonymSortable()
    {
        return 'MALAGASY';
    }

    public function language()
    {
        return new LanguageMg();
    }
}
