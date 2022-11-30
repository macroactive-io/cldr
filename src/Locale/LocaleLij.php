<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLij;

/**
 * Class LocaleLij - Ligurian
 *
 * @psalm-immutable
 */
class LocaleLij extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Líguru';
    }

    public function endonymSortable(): string
    {
        return 'LÍGURU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLij();
    }
}
