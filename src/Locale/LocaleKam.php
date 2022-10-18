<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKam;

/**
 * Class LocaleKam - Kamba
 * @psalm-immutable
 */
class LocaleKam extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kikamba';
    }

    public function endonymSortable(): string
    {
        return 'KIKAMBA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKam();
    }
}
