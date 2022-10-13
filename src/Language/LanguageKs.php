<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Script\ScriptArab;
use Fisharebest\Localization\Territory\TerritoryIn;

/**
 * Class LanguageKs - Representation of the Kashmiri language.
 * @psalm-immutable
 */
class LanguageKs extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'ks';
    }

    public function defaultTerritory(): TerritoryIn
    {
        return new TerritoryIn();
    }

    public function defaultScript(): ScriptArab
    {
        return new ScriptArab();
    }

    public function pluralRule(): PluralRule1
    {
        return new PluralRule1();
    }
}
