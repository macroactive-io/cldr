<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKs;

/**
 * Kashmiri
 *
 * @psalm-immutable
 */
class LocaleKs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'کٲشُر';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKs();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN . self::LTR_MARK,
        ];
    }

    protected function digitsGroup(): int
    {
        return 2;
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
