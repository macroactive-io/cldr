<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFur;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Friulian
 *
 * @psalm-immutable
 */
class LocaleFur extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'furlan';
    }

    public function endonymSortable(): string
    {
        return 'FURLAN';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFur();
    }

    protected function numberSymbols(): array
    {
        return [
            self::GROUP   => self::DOT,
            self::DECIMAL => self::COMMA,
        ];
    }
}
