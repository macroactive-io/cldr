<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptTaml;
use Fisharebest\Localization\Territory\TerritoryIn;

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
