<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTpi;

/**
 * @psalm-immutable
 */
class LocaleTpi extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Tok Pisin';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTpi();
    }
}
