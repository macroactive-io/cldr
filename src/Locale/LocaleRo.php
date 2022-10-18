<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageRo;

/**
 * Class LocaleRo - Romanian
 * @psalm-immutable
 */
class LocaleRo extends AbstractLocale implements LocaleInterface
{
    public function collation(): string
    {
        return 'romanian_ci';
    }

    public function endonym(): string
    {
        return 'română';
    }

    public function endonymSortable(): string
    {
        return 'ROMANA';
    }

    public function language(): LanguageInterface
    {
        return new LanguageRo();
    }

    public function numberSymbols(): array
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
