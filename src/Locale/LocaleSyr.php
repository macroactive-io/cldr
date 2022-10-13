<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSyr;

/**
 * Class LocaleSyr - Syriac
 */
class LocaleSyr extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Syriac';
    }

    public function language()
    {
        return new LanguageSyr();
    }
}
