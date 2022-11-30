<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEo;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Esperanto
 *
 * @psalm-immutable
 */
class LocaleEo extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'esperanto_ci';
    }

    public function endonym(): string
    {
        return 'esperanto';
    }

    public function endonymSortable(): string
    {
        return 'ESPERANTO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEo();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
        ];
    }
}
