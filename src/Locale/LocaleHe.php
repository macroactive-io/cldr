<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageHe;
use Fisharebest\Localization\Language\LanguageInterface;

/**
 * Class LocaleHe - Hebrew
 * @psalm-immutable
 */
class LocaleHe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'עברית';
    }

    public function language(): LanguageInterface
    {
        return new LanguageHe();
    }

    public function numberSymbols(): array
    {
        return [
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN,
        ];
    }
}
