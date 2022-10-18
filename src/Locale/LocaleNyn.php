<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNyn;

/**
 * Nyankole
 *
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
