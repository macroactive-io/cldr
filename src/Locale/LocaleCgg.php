<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageCgg;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleCgg - Chiga
 * @psalm-immutable
 */
class LocaleCgg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Rukiga';
    }

    public function endonymSortable(): string
    {
        return 'RUKIGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCgg();
    }
}
