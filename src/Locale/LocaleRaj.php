<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageRaj;

/**
 * Class LocaleRaj - Rajastani
 *
* @psalm-immutable
 */
class LocaleRaj extends AbstractLocale implements LocaleInterface
{
    protected function digitsGroup(): int
    {
        return 2;
    }

    public function endonym(): string
    {
        return 'राजस्थानी';
    }

    public function language(): LanguageRaj 
    {
        return new LanguageRaj();
    }
}
