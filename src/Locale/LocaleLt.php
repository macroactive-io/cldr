<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageLt;

/**
 * Lithuanian
 *
 * @psalm-immutable
 */
class LocaleLt extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'lithuanian_ci';
    }

    public function endonym(): string
    {
        return 'lietuvių';
    }

    public function endonymSortable(): string
    {
        return 'LIETUVIU';
    }

    public function language(): LanguageInterface
    {
        return new LanguageLt();
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP    => self::NBSP,
            self::DECIMAL  => self::COMMA,
            self::NEGATIVE => self::MINUS_SIGN,
        ];
    }

    protected function percentFormat(): string
    {
        return self::PLACEHOLDER . self::NBSP . self::PERCENT;
    }
}
