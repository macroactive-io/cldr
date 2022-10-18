<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGa;
use Macroactive\Cldr\Language\LanguageInterface;

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
