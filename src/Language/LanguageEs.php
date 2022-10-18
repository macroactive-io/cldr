<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Territory\TerritoryEs;

/**
 * Class LanguageEs - Representation of the Spanish language.
 *
 * @psalm-immutable
 */
class LanguageEs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'es';
    }

    public function defaultTerritory(): TerritoryEs
    {
        return new TerritoryEs();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
