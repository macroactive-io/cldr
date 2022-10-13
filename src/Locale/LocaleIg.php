<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIg;

/**
 * Class LocaleIg - Igbo
 */
class LocaleIg extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Igbo';
    }

    public function endonymSortable()
    {
        return 'IGBO';
    }

    public function language()
    {
        return new LanguageIg();
    }
}
