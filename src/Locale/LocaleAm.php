<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageAm;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Amharic
 *
 * @psalm-immutable
 */
class LocaleAm extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'አማርኛ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageAm();
    }
}
