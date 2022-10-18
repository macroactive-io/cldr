<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageRwk;

/**
 * Rwa
 *
 * @psalm-immutable
 */
class LocaleRwk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kiruwa';
    }

    public function endonymSortable(): string
    {
        return 'KIRUWA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRwk();
    }
}
