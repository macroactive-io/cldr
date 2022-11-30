<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageRw;

/**
 * Kinyarwanda
 *
 * @psalm-immutable
 */
class LocaleRw extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Kinyarwanda';
    }

    public function endonymSortable(): string
    {
        return 'KINYARWANDA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRw();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
