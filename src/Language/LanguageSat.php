<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRuleOneTwoOther;
use Macroactive\Cldr\Script\ScriptOlck;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Class LanguageSat - Representation of the Santali language.

 *
 * @psalm-immutable
 */
class LanguageSat extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Santali';
    }

    public function code(): string
    {
        return 'sat';
    }

    public function defaultScript(): ScriptOlck
    {
        return new ScriptOlck();
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function pluralRule(): PluralRuleOneTwoOther
    {
        return new PluralRuleOneTwoOther();
    }
}
