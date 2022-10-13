<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRof;

/**
 * Class LocaleRof - Rombo
 * @psalm-immutable
 */
class LocaleRof extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kihorombo';
    }

    public function endonymSortable(): string
    {
        return 'KIHOROMBO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRof();
    }
}
