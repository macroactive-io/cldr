<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTe;

/**
 * Class LocaleTe - Telugu
 */
class LocaleTe extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'తెలుగు';
    }

    public function language()
    {
        return new LanguageTe();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
