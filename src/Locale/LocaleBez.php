<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageBez;

/**
 * Class LocaleBez - Bena
 */
class LocaleBez extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Hibena';
    }

    public function endonymSortable()
    {
        return 'HIBENA';
    }

    public function language()
    {
        return new LanguageBez();
    }
}
