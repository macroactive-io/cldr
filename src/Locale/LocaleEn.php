<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageEn;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleEn - English
 * @psalm-immutable
 */
class LocaleEn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'English';
    }

    public function endonymSortable(): string
    {
        return 'ENGLISH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEn();
    }
}
