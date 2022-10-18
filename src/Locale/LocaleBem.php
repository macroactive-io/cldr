<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBem;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleBem - Bemba
 * @psalm-immutable
 */
class LocaleBem extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Ichibemba';
    }

    public function endonymSortable(): string
    {
        return 'ICHIBEMBA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBem();
    }
}
