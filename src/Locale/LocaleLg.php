<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLg;

/**
 * Class LocaleLg - Ganda
 * @psalm-immutable
 */
class LocaleLg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Luganda';
    }

    public function endonymSortable(): string
    {
        return 'LUGANDA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLg();
    }
}
