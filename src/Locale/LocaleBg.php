<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBg;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Bulgarian
 *
 * @psalm-immutable
 */
class LocaleBg extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'български';
    }

    public function endonymSortable(): string
    {
        return 'БЪЛГАРСКИ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBg();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function minimumGroupingDigits(): int
    {
        return 2;
    }
}
