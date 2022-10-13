<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAk;

/**
 * Class LocaleAk - Akan
 */
class LocaleAk extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Akan';
    }

    public function endonymSortable()
    {
        return 'AKAN';
    }

    public function language()
    {
        return new LanguageAk();
    }
}
