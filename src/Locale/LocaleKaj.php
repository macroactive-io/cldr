<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageKaj;

/**
 * Class LocaleKaj - Jju
 * @psalm-immutable
 */
class LocaleKaj extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Jju';
    }

    public function endonymSortable(): string
    {
        return 'JJU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKaj();
    }
}
