<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageUr;

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
