<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Locale;

use Fisharebest\Localization\Language\LanguageInterface;
use Fisharebest\Localization\Language\LanguageLb;

/**
 * Class LocaleLb - Luxembourgish
 * @psalm-immutable
 */
class LocaleLb extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Lëtzebuergesch';
    }

    public function endonymSortable(): string
    {
        return 'LETZEBUERGESCH';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLb();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
