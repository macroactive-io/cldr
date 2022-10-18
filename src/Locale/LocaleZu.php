<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageZu;

/**
 * Zulu
 *
 * @psalm-immutable
 */
class LocaleZu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'isiZulu';
    }

    public function endonymSortable(): string
    {
        return 'ISIZULU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageZu();
    }
}
