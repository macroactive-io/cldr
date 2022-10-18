<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKn;

/**
 * Kannada
 *
 * @psalm-immutable
 */
class LocaleKn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ಕನ್ನಡ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKn();
    }
}
