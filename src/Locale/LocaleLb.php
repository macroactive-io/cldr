<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLb;

/**
 * Luxembourgish
 *
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

    protected function numberSymbols(): array
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
