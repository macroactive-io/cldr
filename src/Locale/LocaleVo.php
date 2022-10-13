<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageVo;

/**
 * Class LocaleVo - Volapük
 */
class LocaleVo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Volapük';
    }

    public function endonymSortable()
    {
        return 'VOLAPUK';
    }

    public function language()
    {
        return new LanguageVo();
    }
}
