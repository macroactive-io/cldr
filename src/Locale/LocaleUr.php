<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageUr;

/**
 * Class LocaleUr - Urdu
 * @psalm-immutable
 */
class LocaleUr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'اردو';
    }

    public function language(): LanguageInterface
    {
        return new LanguageUr();
    }

    public function numberSymbols(): array
    {
        return [
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        ];
    }

    protected function digitsGroup(): int
    {
        return 2;
    }
}
