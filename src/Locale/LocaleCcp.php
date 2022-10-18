<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCcp;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleCcp - Chakma
 * @psalm-immutable
 */
class LocaleCcp extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return '𑄌𑄋𑄴𑄟𑄳𑄦';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCcp();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
