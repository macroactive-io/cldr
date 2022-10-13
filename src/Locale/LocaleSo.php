<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSo;

/**
 * Class LocaleSo - Somali
 * @psalm-immutable
 */
class LocaleSo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Soomaali';
    }

    public function endonymSortable(): string
    {
        return 'SOOMAALI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSo();
    }
}
