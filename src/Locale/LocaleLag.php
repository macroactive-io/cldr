<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLag;

/**
 * Class LocaleLag - Langi
 * @psalm-immutable
 */
class LocaleLag extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kɨlaangi';
    }

    public function endonymSortable(): string
    {
        return 'KILAANGI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLag();
    }
}
