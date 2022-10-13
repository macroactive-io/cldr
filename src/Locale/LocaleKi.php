<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageKi;

/**
 * Class LocaleKi - Kikuyu
 */
class LocaleKi extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Gikuyu';
    }

    public function endonymSortable()
    {
        return 'GIKUYU';
    }

    public function language()
    {
        return new LanguageKi();
    }
}
