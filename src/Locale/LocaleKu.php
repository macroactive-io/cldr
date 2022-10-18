<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Language\LanguageInterface;
use Macroactive\Cldr\Language\LanguageKu;

/**
 * Kurdish
 *
 * @psalm-immutable
 */
class LocaleKu extends AbstractLocale implements LocaleInterface
{
    public function endonym(): string
    {
        return 'kurdî';
    }

    public function endonymSortable(): string
    {
        return 'KURDI';
    }

    public function language(): LanguageInterface
    {
        return new LanguageKu();
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
        return self::PERCENT . '%s';
    }
}
