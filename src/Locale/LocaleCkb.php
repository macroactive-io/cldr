<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCkb;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Sorani
 *
 * @psalm-immutable
 */
class LocaleCkb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'کوردیی ناوەندی';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCkb();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::RTL_MARK . self::HYPHEN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
