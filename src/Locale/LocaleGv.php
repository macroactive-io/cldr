<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageGv;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Manx
 *
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
