<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageRof;

/**
 * Class LocaleRof - Rombo
 * @psalm-immutable
 */
class LocaleRof extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kihorombo';
    }

    public function endonymSortable(): string
    {
        return 'KIHOROMBO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRof();
    }
}
