<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptTaml;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageTa - Representation of the Tamil language.
 * @psalm-immutable
 */
class LanguageTa extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ta';
    }

    public function defaultScript(): ScriptTaml
    {
        return new ScriptTaml();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
