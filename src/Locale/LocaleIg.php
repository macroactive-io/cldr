<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageIg;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Igbo
 *
 * @psalm-immutable
 */
class LocaleIg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Igbo';
    }

    public function endonymSortable(): string
    {
        return 'IGBO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIg();
    }
}
