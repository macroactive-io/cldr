<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSmi;

/**
 * Class LocaleSmi
 */
class LocaleSmi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'saami';
    }

    public function endonymSortable()
    {
        return 'SAAMI';
    }

    public function language()
    {
        return new LanguageSmi();
    }
}
