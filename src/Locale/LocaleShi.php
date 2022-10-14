<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageShi;
use Fisharebest\Localization\Script\ScriptDirection;

/**
 * Class LocaleShi - Tachelhit
 * @psalm-immutable
 */
class LocaleShi extends AbstractLocale implements LocaleInterface
{
    public function direction(): ScriptDirection
    {
        return ScriptDirection::LTR;
    }

    public function endonym(): string
    {
        return 'ⵜⴰⵛⵍⵃⵉⵜ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageShi();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
