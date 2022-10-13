<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSsy;

/**
 * Class LocaleSsy - Saho
 * @psalm-immutable
 */
class LocaleSsy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Saho';
    }

    public function endonymSortable(): string
    {
        return 'SAHO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSsy();
    }
}
