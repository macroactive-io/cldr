<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageUz;

/**
 * Uzbek
 *
 * @psalm-immutable
 */
class LocaleUz extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'o‘zbek';
    }

    public function endonymSortable(): string
    {
        return 'OZBEK';
    }

    public function language(): LanguageInterface
    {
        return new LanguageUz();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }
}
