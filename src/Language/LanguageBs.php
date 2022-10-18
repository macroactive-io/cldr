<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule7;
use Macroactive\Cldr\Territory\TerritoryBa;

/**
 * Class LanguageBs - Representation of the Bosnian language.
 * @psalm-immutable
 */
class LanguageBs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'bs';
    }

    public function defaultTerritory(): TerritoryBa
    {
        return new TerritoryBa();
    }

    public function pluralRule(): PluralRule7
    {
        return new PluralRule7();
    }
}
