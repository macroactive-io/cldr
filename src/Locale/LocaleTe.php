<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTe;

/**
 * Class LocaleTe - Telugu
 * @psalm-immutable
 */
class LocaleTe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'తెలుగు';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTe();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
