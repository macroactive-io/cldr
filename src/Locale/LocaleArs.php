<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageArs;
use Fisharebest\Localization\Language\LanguageInterface;

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
