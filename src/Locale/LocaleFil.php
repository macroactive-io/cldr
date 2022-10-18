<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFil;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Filipino
 *
 * @psalm-immutable
 */
class LocaleFil extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Filipino';
    }

    public function endonymSortable(): string
    {
        return 'FILIPINO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFil();
    }
}
