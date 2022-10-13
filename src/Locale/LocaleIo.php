<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageIo;

/**
 * Class LocaleIo - Ido
 */
class LocaleIo extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Ido';
    }

    public function endonymSortable()
    {
        return 'IDO';
    }

    public function language()
    {
        return new LanguageIo();
    }
}
