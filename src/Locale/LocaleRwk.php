<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageRwk;

/**
 * Class LocaleRwk - Rwa
 * @psalm-immutable
 */
class LocaleRwk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kiruwa';
    }

    public function endonymSortable(): string
    {
        return 'KIRUWA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRwk();
    }
}
