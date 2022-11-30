<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageOc;

/**
 * Occitan
 *
 * @psalm-immutable
 */
class LocaleOc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'occitan';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOc();
    }
}
