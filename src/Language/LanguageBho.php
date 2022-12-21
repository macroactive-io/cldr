<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageBho - Representation of the Bhojpuri language.

 *
 * @psalm-immutable
 */
class LanguageBho extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Bhojpuri';
    }

    public function code(): string
    {
        return 'bho';
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
