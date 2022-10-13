<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGv;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGv - Manx
 * @psalm-immutable
 */
class LocaleGv extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gaelg';
    }

    public function endonymSortable(): string
    {
        return 'GAELG';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGv();
    }
}
