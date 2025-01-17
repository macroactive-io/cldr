<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageBe;
use Macroactive\Cldr\Language\LanguageInterface;

/**
 * Belarusian
 *
 * @psalm-immutable
 */
class LocaleBe extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'беларуская';
    }

    public function endonymSortable(): string
    {
        return 'БЕЛАРУСКАЯ';
    }

    public function language(): LanguageInterface
    {
        return new LanguageBe();
    }

    protected function numberSymbols(): array
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
