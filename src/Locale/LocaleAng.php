<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAng;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAng - Anglo-Saxon / Old-English
 * @psalm-immutable
 */
class LocaleAng extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ænglisc';
    }

    public function endonymSortable(): string
    {
        return 'ÆNGLISC';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAng();
    }
}
