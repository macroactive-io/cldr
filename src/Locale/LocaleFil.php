<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageFil;

/**
 * Class LocaleFil - Filipino
 */
class LocaleFil extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Filipino';
    }

    public function endonymSortable()
    {
        return 'FILIPINO';
    }

    public function language()
    {
        return new LanguageFil();
    }
}
