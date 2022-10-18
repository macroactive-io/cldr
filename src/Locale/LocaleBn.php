<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBn;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleBn - Bengali
 * @psalm-immutable
 */
class LocaleBn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'বাংলা';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBn();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
