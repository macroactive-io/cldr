<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryZa;

/**
 * Class LanguageVe - Representation of the Venda language.
 * @psalm-immutable
 */
class LanguageVe extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 've';
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
