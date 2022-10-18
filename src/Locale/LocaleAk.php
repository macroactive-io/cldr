<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAk;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleAk - Akan
 * @psalm-immutable
 */
class LocaleAk extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Akan';
    }

    public function endonymSortable(): string
    {
        return 'AKAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAk();
    }
}
