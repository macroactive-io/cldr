<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBgc;

/**
 * Class LocaleBgc - Haryanvi
 *
 * @psalm-immutable
 */
class LocaleBgc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'हरियाणवी';
    }

    public function language(): LanguageBgc
    {
        return new LanguageBgc();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
