<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageMas;

/**
 * Class LocaleMas - Masai
 */
class LocaleMas extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Maa';
    }

    public function endonymSortable()
    {
        return 'MAA';
    }

    public function language()
    {
        return new LanguageMas();
    }
}
