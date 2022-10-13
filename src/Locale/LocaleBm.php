<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBm;

/**
 * Class LocaleBm - Bambara
 */
class LocaleBm extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'bamanakan';
    }

    public function endonymSortable()
    {
        return 'BAMANAKAN';
    }

    public function language()
    {
        return new LanguageBm();
    }
}
