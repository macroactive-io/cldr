<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBrx;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Bodo
 *
 * @psalm-immutable
 */
class LocaleBrx extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'बड़ो';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBrx();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
