<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * Class LanguageXh - Representation of the Xhosa language.
 * @psalm-immutable
 */
class LanguageXh extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'xh';
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
