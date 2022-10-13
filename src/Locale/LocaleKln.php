<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKln;

/**
 * Class LocaleKln - Kalenjin
 */
class LocaleKln extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kalenjin';
    }

    public function endonymSortable()
    {
        return 'KALENJIN';
    }

    public function language()
    {
        return new LanguageKln();
    }
}
