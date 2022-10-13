<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageSma;

/**
 * Class LocaleSma
 */
class LocaleSma extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Åarjelsaemien gïele';
    }

    public function endonymSortable()
    {
        return 'AARJELSAMIEN GIELE';
    }

    public function language()
    {
        return new LanguageSma();
    }
}
