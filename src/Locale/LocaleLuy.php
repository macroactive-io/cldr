<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLuy;

/**
 * Class LocaleLuy - Luyia
 * @psalm-immutable
 */
class LocaleLuy extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Luluhia';
    }

    public function endonymSortable(): string
    {
        return 'LULUHIA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLuy();
    }
}
