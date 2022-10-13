<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageNyn;

/**
 * Class LocaleNyn - Nyankole
 * @psalm-immutable
 */
class LocaleNyn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Runyankore';
    }

    public function endonymSortable(): string
    {
        return 'RUNYANKORE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNyn();
    }
}
