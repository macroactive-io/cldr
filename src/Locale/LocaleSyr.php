<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSyr;

/**
 * Class LocaleSyr - Syriac
 * @psalm-immutable
 */
class LocaleSyr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Syriac';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSyr();
    }
}
