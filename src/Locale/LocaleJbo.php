<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageJbo;

/**
 * Class LocalePap - Lojban
 */
class LocaleJbo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Lojban';
    }

    public function endonymSortable()
    {
        return 'LOJBAN';
    }

    public function language()
    {
        return new LanguageJbo();
    }
}
