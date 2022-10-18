<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageMl;

/**
 * Class LocaleMl - Malayalam
 * @psalm-immutable
 */
class LocaleMl extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'മലയാളം';
    }

    public function language(): LanguageInterface
    {
        return new LanguageMl();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
