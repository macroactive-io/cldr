<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBgc;

/**
 * Class LocaleBgc - Haryanvi
 * @psalm-immutable
 */
class LocaleBgc extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'हरियाणवी';
    }

    public function language(): LanguageBgc
    {
        return new LanguageBgc();
    }
}
