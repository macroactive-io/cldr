<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageEwo;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Ewondo
 *
 * @psalm-immutable
 */
class LocaleEwo extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'ewondo';
    }

    public function endonymSortable(): string
    {
        return 'EWONDO';
    }

    public function language(): LanguageInterface
    {
        return new LanguageEwo();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
