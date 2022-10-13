<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMt;

/**
 * Class LocaleMt - Maltese
 * @psalm-immutable
 */
class LocaleMt extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Malti';
    }

    public function endonymSortable(): string
    {
        return 'MALTI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMt();
    }
}
