<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEbu;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEbu - Embu
 * @psalm-immutable
 */
class LocaleEbu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kĩembu';
    }

    public function endonymSortable(): string
    {
        return 'KIEMBU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEbu();
    }
}
