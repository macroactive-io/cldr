<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageFr;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Class LocaleFr - French
 * @psalm-immutable
 */
class LocaleFr extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'français';
    }

    public function endonymSortable(): string
    {
        return 'FRANCAIS';
    }

    public function language(): LanguageInterface
    {
        return new LanguageFr();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::NARROW_NBSP,
            self::DECIMAL => self::COMMA,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
