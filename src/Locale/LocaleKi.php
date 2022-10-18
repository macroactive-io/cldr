<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKi;

/**
 * Kikuyu
 *
 * @psalm-immutable
 */
class LocaleKi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Gikuyu';
    }

    public function endonymSortable(): string
    {
        return 'GIKUYU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKi();
    }
}
