<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLag;

/**
 * Class LocaleLag - Langi
 */
class LocaleLag extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kɨlaangi';
    }

    public function endonymSortable()
    {
        return 'KILAANGI';
    }

    public function language()
    {
        return new LanguageLag();
    }
}
