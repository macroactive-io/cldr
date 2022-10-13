<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSbp;

/**
 * Class LocaleSbp - Sangu
 * @psalm-immutable
 */
class LocaleSbp extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ishisangu';
    }

    public function endonymSortable(): string
    {
        return 'ISHISANGU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSbp();
    }
}
