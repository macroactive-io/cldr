<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageOc;

/**
 * Class LocaleOc - Occitan
 * @psalm-immutable
 */
class LocaleOc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'lenga d’òc';
    }

    public function language(): LanguageInterface
    {
        return new LanguageOc();
    }
}
