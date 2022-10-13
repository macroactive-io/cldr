<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageNaq;

/**
 * Class LocaleNaq - Nama
 */
class LocaleNaq extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Khoekhoegowab';
    }

    public function endonymSortable()
    {
        return 'KHOEKHOEGOWAB';
    }

    public function language()
    {
        return new LanguageNaq();
    }
}
