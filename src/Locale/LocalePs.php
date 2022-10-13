<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguagePs;

/**
 * Class LocalePs - Pashto
 * @psalm-immutable
 */
class LocalePs extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'پښتو';
    }

    public function language(): LanguageInterface
    {
        return new LanguagePs();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::ARAB_GROUP,
            self::DECIMAL  => self::ARAB_DECIMAL,
            self::NEGATIVE => self::LTR_MARK . self::HYPHEN . self::LTR_MARK,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::ARAB_PERCENT;
    }
}
