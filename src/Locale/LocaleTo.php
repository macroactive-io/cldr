<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageTo;

/**
 * Class LocaleTo - Tongan
 * @psalm-immutable
 */
class LocaleTo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'lea fakatonga';
    }

    public function endonymSortable(): string
    {
        return 'LEA FAKATONGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTo();
    }
}
