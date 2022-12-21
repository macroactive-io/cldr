<?php

declare(strict_types=1);

namespace Macroactive\Cldr\Language;

use Macroactive\Cldr\PluralRule\PluralRule1;
use Macroactive\Cldr\Script\ScriptMlym;
use Macroactive\Cldr\Territory\TerritoryIn;

/**
 * Malayalam
 *
 * @psalm-immutable
 */
class LanguageMl extends AbstractLanguage implements LanguageInterface
{
    public function exonym(): string
    {
        return 'Malayalam';
    }

    public function code(): string
    {
        return 'ml';
    }

    public function defaultScript(): ScriptMlym
    {
        return new ScriptMlym();
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
