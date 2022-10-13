<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageZgh;

/**
 * Class LocaleZgh - Standard Moroccan Tamazight
 * @psalm-immutable
 */
class LocaleZgh extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ⵜⴰⵎⴰⵣⵉⵖⵜ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageZgh();
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
