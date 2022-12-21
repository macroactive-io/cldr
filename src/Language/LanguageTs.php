<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * Tsonga
 *
 * @psalm-immutable
 */
class LanguageTs extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Tsonga';
    }

    public function code(): string
    {
        return 'ts';
    }

    public function defaultTerritory(): TerritoryZa
    {
        return new TerritoryZa();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
