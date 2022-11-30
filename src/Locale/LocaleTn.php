<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageTn;

/**
 * Tswana
 *
 * @psalm-immutable
 */
class LocaleTn extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'Setswana';
    }

    public function endonymSortable(): string
    {
        return 'SETSWANA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageTn();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP => self::NBSP,
        ];
    }
}
