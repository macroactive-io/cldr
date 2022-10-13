<?php

declare(strict_types=1);

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule0;
use Fisharebest\Localization\Script\ScriptTibt;
use Fisharebest\Localization\Territory\TerritoryBt;

/**
 * Class LanguageDz - Representation of the Dzongkha language.
 * @psalm-immutable
 */
class LanguageDz extends AbstractLanguage implements LanguageInterface
{
    public function code(): string
    {
        return 'dz';
    }

    public function defaultScript(): ScriptTibt
    {
        return new ScriptTibt();
    }

    public function defaultTerritory(): TerritoryBt
    {
        return new TerritoryBt();
    }

    public function pluralRule(): PluralRule0
    {
        return new PluralRule0();
    }
}
