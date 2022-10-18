<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule10;
use Macroactive\Cldr\Territory\TerritoryDe;

/**
 * Class LanguageHsb - Representation of the Upper Sorbian language.
 * @psalm-immutable
 */
class LanguageHsb extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'hsb';
    }

    public function defaultTerritory(): TerritoryDe
    {
        return new TerritoryDe();
    }

    public function pluralRule(): PluralRule10
    {
        return new PluralRule10();
    }
}
