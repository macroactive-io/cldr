<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSw;

/**
 * Class LocaleSw - Swahili
 * @psalm-immutable
 */
class LocaleSw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kiswahili';
    }

    public function endonymSortable(): string
    {
        return 'KISWAHILI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSw();
    }
}
