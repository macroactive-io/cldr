<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptMlym;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageMl - Representation of the Malayalam language.
 * @psalm-immutable
 */
class LanguageMl extends AbstractLanguage implements LanguageInterface
{
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
