<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageIu;

/**
 * Class LocaleIu - Inuktitut
 * @psalm-immutable
 */
class LocaleIu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ᐃᓄᒃᑎᑐᑦ';
    }

    public function endonymSortable(): string
    {
        return 'ᐃᓄᒃᑎᑐᑦ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageIu();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
