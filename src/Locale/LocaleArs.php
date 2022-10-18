<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageArs;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleAr - Najdi Arabic
 * @psalm-immutable
 */
class LocaleArs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'اللهجة النجدية‎';
    }

    public function language(): LanguageInterface
    {
        return new LanguageArs();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::ALM . self::HYPHEN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT . self::ALM;
    }
}
