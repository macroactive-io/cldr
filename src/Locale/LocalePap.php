<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguagePap;

/**
 * Class LocalePap - Papiamentu
 */
class LocalePap extends AbstractLocale implements LocaleInterface
{
    public function endonym()
    {
        return 'Papiamentu';
    }

    public function endonymSortable()
    {
        return 'PAPIAMENTU';
    }

    public function language()
    {
        return new LanguagePap();
    }
}
