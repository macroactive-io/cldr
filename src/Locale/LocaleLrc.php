<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLrc;

/**
 * Class LocaleLrc - Luri
 * @psalm-immutable
 */
class LocaleLrc extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'لۊری شومالی';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLrc();
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
