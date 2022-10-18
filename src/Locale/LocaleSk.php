<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageSk;

/**
 * Slovak
 *
 * @psalm-immutable
 */
class LocaleSk extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'slovak_ci';
    }

    public function endonym(): string
    {
        return 'slovenčina';
    }

    public function endonymSortable(): string
    {
        return 'SLOVENCINA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageSk();
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
