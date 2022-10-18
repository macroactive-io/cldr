<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTo;

/**
 * Class LocaleTo - Tongan
 * @psalm-immutable
 */
class LocaleTo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'lea fakatonga';
    }

    public function endonymSortable(): string
    {
        return 'LEA FAKATONGA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTo();
    }
}
