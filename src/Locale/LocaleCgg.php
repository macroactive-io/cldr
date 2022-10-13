<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCgg;

/**
 * Class LocaleCgg - Chiga
 */
class LocaleCgg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Rukiga';
    }

    public function endonymSortable()
    {
        return 'RUKIGA';
    }

    public function language()
    {
        return new LanguageCgg();
    }
}
