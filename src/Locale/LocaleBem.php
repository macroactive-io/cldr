<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBem;

/**
 * Class LocaleBem - Bemba
 */
class LocaleBem extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ichibemba';
    }

    public function endonymSortable()
    {
        return 'ICHIBEMBA';
    }

    public function language()
    {
        return new LanguageBem();
    }
}
