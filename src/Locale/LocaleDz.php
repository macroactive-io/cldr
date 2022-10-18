<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDz;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleDz - Dzongkha
 * @psalm-immutable
 */
class LocaleDz extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'རྫོང་ཁ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDz();
    }

    protected function digitsGroup(): int
    {
        return 2;
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
