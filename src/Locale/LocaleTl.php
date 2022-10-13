<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTl;

/**
 * Class LocaleTl - Tagalog
 * @psalm-immutable
 */
class LocaleTl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tagalog';
    }

    public function endonymSortable(): string
    {
        return 'TAGALOG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTl();
    }
}
