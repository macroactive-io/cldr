<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule11;
use Macroactive\Cldr\Territory\TerritoryIe;

/**
 * Class LanguageGa - Representation of the Irish language.
 * @psalm-immutable
 */
class LanguageGa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ga';
    }

    public function defaultTerritory(): TerritoryIe
    {
        return new TerritoryIe();
    }

    public function pluralRule(): PluralRule11
    {
        return new PluralRule11();
    }
}
