<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageMn;

/**
 * Class LocaleMn - Mongolian
 * @psalm-immutable
 */
class LocaleMn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'монгол';
    }

    public function endonymSortable(): string
    {
        return 'МОНГОЛ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMn();
    }
}
