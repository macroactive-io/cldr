<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule2;
use Macroactive\Cldr\Script\ScriptDeva;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageDoi - Representation of the Dogri language.
 * @psalm-immutable
 */
class LanguageDoi extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'doi';
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