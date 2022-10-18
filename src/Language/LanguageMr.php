<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageMr - Representation of the Marathi language.
 * @psalm-immutable
 */
class LanguageMr extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'mr';
    }

    public function defaultScript(): ScriptDeva
    {
        return new ScriptDeva();
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
