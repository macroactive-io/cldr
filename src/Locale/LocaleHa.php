<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHa - Hausa
 * @psalm-immutable
 */
class LocaleHa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Hausa';
    }

    public function endonymSortable(): string
    {
        return 'HAUSA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHa();
    }
}
