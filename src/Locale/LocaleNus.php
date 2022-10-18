<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageNus;

/**
 * Nuer
 *
 * @psalm-immutable
 */
class LocaleNus extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Thok Nath';
    }

    public function endonymSortable(): string
    {
        return 'THOK NATH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageNus();
    }
}
