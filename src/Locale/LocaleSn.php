<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageSn;

/**
 * Class LocaleSn - Shona
 * @psalm-immutable
 */
class LocaleSn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'chiShona';
    }

    public function endonymSortable(): string
    {
        return 'CHISHONA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSn();
    }
}
