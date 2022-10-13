<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageTeo;

/**
 * Class LocaleTeo - Teso
 */
class LocaleTeo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Kiteso';
    }

    public function endonymSortable()
    {
        return 'KITESO';
    }

    public function language()
    {
        return new LanguageTeo();
    }
}
