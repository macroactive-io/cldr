<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKde;

/**
 * Makonde
 *
 * @psalm-immutable
 */
class LocaleKde extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Chimakonde';
    }

    public function endonymSortable(): string
    {
        return 'CHIMAKONDE';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKde();
    }
}
