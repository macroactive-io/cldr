<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageAsa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleAsa - Asu
 * @psalm-immutable
 */
class LocaleAsa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kipare';
    }

    public function endonymSortable(): string
    {
        return 'KIPARE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAsa();
    }
}
