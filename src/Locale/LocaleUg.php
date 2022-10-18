<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageUg;

/**
 * Uyghur
 *
 * @psalm-immutable
 */
class LocaleUg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ئۇيغۇرچە';
    }

    public function language(): LanguageInterface
    {
        return new LanguageUg();
    }
}
