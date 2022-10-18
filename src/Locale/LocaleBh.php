<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBh;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Bihari
 *
 * @psalm-immutable
 */
class LocaleBh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Bihari';
    }

    public function endonymSortable(): string
    {
        return 'BIHARI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBh();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
