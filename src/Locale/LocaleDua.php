<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageDua;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Duala
 *
 * @psalm-immutable
 */
class LocaleDua extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'duálá';
    }

    public function endonymSortable(): string
    {
        return 'DUALA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageDua();
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
