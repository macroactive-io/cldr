<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageLuo;

/**
 * Class LocaleLuo - Luo
 */
class LocaleLuo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Dholuo';
    }

    public function endonymSortable()
    {
        return 'DHOLUO';
    }

    public function language()
    {
        return new LanguageLuo();
    }
}
