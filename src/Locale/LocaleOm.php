<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageOm;

/**
 * Class LocaleOm - Oromo
 * @psalm-immutable
 */
class LocaleOm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Oromoo';
    }

    public function endonymSortable(): string
    {
        return 'OROMOO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOm();
    }
}
