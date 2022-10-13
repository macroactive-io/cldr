<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageDav;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleDav - Taita
 * @psalm-immutable
 */
class LocaleDav extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kitaita';
    }

    public function endonymSortable(): string
    {
        return 'KITAITA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDav();
    }
}
