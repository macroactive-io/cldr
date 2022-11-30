<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNb;

/**
 * Norwegian Bokmål
 *
 * @psalm-immutable
 */
class LocaleNb extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'danish_ci';
    }

    public function endonym(): string
    {
        return 'norsk bokmål';
    }

    public function endonymSortable(): string
    {
        return 'NORSK BOKMAL';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNb();
    }
}
