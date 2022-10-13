<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageGa;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleGa - Irish
 * @psalm-immutable
 */
class LocaleGa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gaeilge';
    }

    public function endonymSortable(): string
    {
        return 'GAEILGE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageGa();
    }
}
