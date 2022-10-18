<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptKnda;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageKn - Representation of the Kannada language.
 * @psalm-immutable
 */
class LanguageKn extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'kn';
    }

    public function defaultScript(): ScriptKnda
    {
        return new ScriptKnda();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule2
    {
        return new PluralRule2();
    }
}
