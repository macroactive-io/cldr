<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageCa;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Catalan
 *
 * @psalm-immutable
 */
class LocaleCa extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'català';
    }

    public function endonymSortable(): string
    {
        return 'CATALA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageCa();
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
