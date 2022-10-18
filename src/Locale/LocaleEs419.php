<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Locale;

use Macroactive\Cldr\Territory\Territory419;

/**
 * Latin American Spanish
 *
 * @psalm-immutable
 */
class LocaleEs419 extends LocaleEs
{
    public function endonym(): string
    {
        return 'español latinoamericano';
    }

    public function endonymSortable(): string
    {
        return 'ESPANOL LATINOAMERICANO';
    }

    public function numberSymbols(): array
    {
        return [
            self::GROUP   => self::COMMA,
            self::DECIMAL => self::DOT,
        ];
    }

    public function territory(): Territory419
    {
        return new Territory419();
    }
}
