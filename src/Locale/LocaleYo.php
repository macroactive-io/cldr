<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageYo;

/**
 * Class LocaleYo - Yoruba
 */
class LocaleYo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Èdè Yorùbá';
    }

    public function endonymSortable()
    {
        return 'EDE YORUBA';
    }

    public function language()
    {
        return new LanguageYo();
    }
}
