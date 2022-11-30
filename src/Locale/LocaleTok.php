<?php

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageTok;

/**
 * Class LocaleTok - Toki Pona
 *
* @psalm-immutable
 */
class LocaleTok extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Toki Pona';
    }

    public function endonymSortable(): string
    {
        return 'TOKI PONA';
    }

    public function language(): LanguageTok 
    {
        return new LanguageTok();
    }
}
