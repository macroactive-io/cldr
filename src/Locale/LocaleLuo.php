<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLuo;

/**
 * Class LocaleLuo - Luo
 * @psalm-immutable
 */
class LocaleLuo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Dholuo';
    }

    public function endonymSortable(): string
    {
        return 'DHOLUO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLuo();
    }
}
