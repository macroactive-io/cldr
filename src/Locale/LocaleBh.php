<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBh;

/**
 * Class LocaleBh - Bihari
 */
class LocaleBh extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Bihari';
    }

    public function endonymSortable()
    {
        return 'BIHARI';
    }

    public function language()
    {
        return new LanguageBh();
    }

    protected function digitsGroup()
    {
        return 2;
    }
}
