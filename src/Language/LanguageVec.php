<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1WithMillions;
use Macroactive\Cldr\Territory\TerritoryIt;

/**
 * Class LanguageVec - Representation of the Venetian language.

 *
 * @psalm-immutable
 */
class LanguageVec extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Venetian';
    }

    public function code(): string
    {
        return 'vec';
    }

    public function defaultTerritory(): TerritoryIt
    {
        return new TerritoryIt();
    }

    public function pluralRule(): PluralRule1WithMillions
    {
        return new PluralRule1WithMillions();
    }
}
