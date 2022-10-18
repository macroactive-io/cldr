<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBez;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Bena
 *
 * @psalm-immutable
 */
class LocaleBez extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Hibena';
    }

    public function endonymSortable(): string
    {
        return 'HIBENA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBez();
    }
}
